<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['id']) || $_SESSION['role'] != "admin") {
    header('Location: ../fr/connexion.php');
    exit();
}
include("../include/connexion.inc.php");

if (isset($_POST['link_image']) && isset($_POST['title_image'])) {
    $link_image = $_POST['link_image'];
    $title_image = $_POST['title_image'];
    $sql = "INSERT INTO images (titre, path) VALUES ('$title_image', '$link_image')";
    $result = $bdd->query($sql);

    if ($result) {
        echo '<script>alert("Image ajouté");</script>';
        echo '<img src="' . $link_image . '" alt="test" border="0">';
    } else {
        echo '<script>alert("Erreur lors de l\'ajout de l\'image");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add image</title>
</head>
<body>
    <form action="admin_image.php" method="post">
        <label for="link_image">Image link</label>
        <input type="text" name="link_image" id="link_image" placeholder="Lien de l'image"><br>
        <label for="title_image">Image title</label>
        <input type="text" name="title_image" id="title_image" placeholder="Titre de l'image"><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>