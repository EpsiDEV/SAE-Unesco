<?php
$user = '';
$pass = '';
try {
    $bdd = new PDO('pgsql:host=sqletud.u-pem.fr; dbname=', $user, $pass);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Activer le mode d'erreur
    $bdd->exec("");
} catch (PDOException $e) {
    echo "ERREUR : La connexion a échouée : " . $e->getMessage();
    die();
}
?>  
