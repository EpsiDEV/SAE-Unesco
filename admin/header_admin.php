<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Administrateur</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #505050;
            padding: 20px 0;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }

        nav ul li a {
            text-decoration: none;
            color: #ffffff;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: #f7af3e;
        }

        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../admin/dashboard_admin.php">Tableau de Bord</a></li>
                <li><a href="../src/gest.php">Modifier le Texte</a></li>
                <li><a href="../src/admin_image.php">Ajouter des Images</a></li>
                <li><a href="../src/gest_images.php">Modifier les Images</a></li>
                <li><a href="../admin/logout.php">Se Déconnecter</a></li>
            </ul>
        </nav>
    </header>
</body>
</html>