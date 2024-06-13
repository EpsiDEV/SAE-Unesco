<?php
session_start();
require '../include/connexion.inc.php'; // Include the connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Veuillez entrer le nom d'utilisateur et le mot de passe.";
        header('Location: connexion.php?error=' . urlencode($error));
        exit;
    } else {
        // Prepare a secure SQL statement to avoid SQL injection
        $stmt = $bdd->prepare("SELECT id, password, role FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        
        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Verify the password using password_verify
                if (password_verify($password, $user['password'])) {
                    // Correct password, start the session
                    $_SESSION['id'] = $user['id'];
                    $_SESSION['role'] = $user['role'];
                    
                    if ($user['role'] == "gest") {
                        header('Location: ../accueil_gest.php');
                    } else {
                        header('Location: ../admin/accueil_admin.php');
                    }
                    exit;
                } else {
                    $error = "Nom d'utilisateur ou mot de passe incorrect.";
                }
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            $error = "Erreur de la requête SQL.";
        }
        
        // Redirect to the login page with an error message
        header('Location: connexion.php?error=' . urlencode($error));
        exit;
    }
}
?>