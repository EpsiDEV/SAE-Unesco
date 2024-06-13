<?php
session_start();
require '../include/connexion.inc.php'; // Include the connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        $error = "Veuillez entrer le nom d'utilisateur et le mot de passe.";
    } else {
        // Prepare a secure SQL statement to avoid SQL injection
        $stmt = $bdd->prepare("SELECT id, password FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if ($stmt === false) {
            die('Erreur de la requête SQL.');
        }
        
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password
            if ($password == $user['password']) {
                echo "bon mdp";
                // Correct password, start the session
                $_SESSION['id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header('Location: admin.php');
                exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
                header('Location: connexion.php?error=' . urlencode($error));
                exit;
            }
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
            header('Location: connexion.php?error=' . urlencode($error));
            exit;
        }
    }
}
?>