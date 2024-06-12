<?php
session_start();
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        $error = "Veuillez entrer le nom d'utilisateur et le mot de passe.";
    } else {
        // Préparez une requête SQL sécurisée pour éviter les injections SQL
        $stmt = $conn->prepare('SELECT id, password FROM unesco.users WHERE username = ?');
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $hashed_password);
            $stmt->fetch();

            // Vérifiez le mot de passe
            if (password_verify($password, $hashed_password)) {
                // Mot de passe correct, démarrez la session
                $_SESSION['id'] = $id;
                header('Location: /');
                exit;
            } else {
                $error = "Nom d'utilisateur ou mot de passe incorrect.";
            }
        } else {
            $error = "Nom d'utilisateur ou mot de passe incorrect.";
        }
        
        $stmt->close();
    }
}

$conn->close();
?>