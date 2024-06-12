<?php
$user = 'jawed.essahli';
$pass = 'Ermite';
try {
    $bdd = new PDO('pgsql:host=sqletud.u-pem.fr; dbname=jawed.essahli_db', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur
    $bdd->exec("SET search_path TO unesco;");
} catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée : " . $e->getMessage();
    die();
}
?>