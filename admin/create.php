<?php
include("../include/connexion.inc.php");

if(isset($_POST['valid'])) {
    $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    $query = "INSERT INTO unesco.users (username, password, role) VALUES (:username, :password, 'gest')";
    $req_insert = $bdd->prepare($query);
    $req_insert->bindParam(':username', $_POST['username']);
    $req_insert->bindParam(':password', $hashed_password); 
    $req_insert->execute();
    header('Location: dashboard_admin.php');
    exit();
}
?>
