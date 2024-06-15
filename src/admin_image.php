<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_SESSION['id']) || $_SESSION['role'] != "admin") {
    header('Location: ../src/connexion.php');
    exit();
}
include("../include/connexion.inc.php");

if (isset($_POST['link_image']) && isset($_POST['title_image'])) {
    $link_image = $_POST['link_image'];
    $title_image = $_POST['title_image'];
    $sql = "INSERT INTO images (titre, path) VALUES (:title_image, :link_image)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':title_image', $title_image);
    $stmt->bindParam(':link_image', $link_image);

    if ($stmt->execute()) {
        echo '<script>alert("Image ajoutée avec succès.");</script>';
        echo '<img src="' . htmlspecialchars($link_image) . '" alt="' . htmlspecialchars($title_image) . '" style="display: block; margin: 20px auto; max-width: 100%; height: auto;">';
    } else {
        echo '<script>alert("Erreur lors de l\'ajout de l\'image.");</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une image</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        header {
            width: 100%;
            margin-bottom: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 100%;
            max-width: 600px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <?php include('../admin/header_admin.php'); ?>
    <form action="admin_image.php" method="post">
        <label for="link_image">Lien de l'image</label>
        <input type="text" name="link_image" id="link_image" placeholder="https://i.ibb.co/cDzJDq9/napoleon.png" required>
        <label for="title_image">Titre de l'image</label>
        <input type="text" name="title_image" id="title_image" placeholder="napoleon_histoire" required>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
