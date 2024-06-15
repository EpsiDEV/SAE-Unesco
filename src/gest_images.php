<?php
    include("../include/connexion.inc.php");
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['id']) || !isset($_SESSION['role'])) {
        header('Location: ../src/connexion.php');
        exit();
    }
    $role = $_SESSION['role'];
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $titre = $_POST['titre'];
        $path = $_POST['path'];

        $query = "UPDATE images SET path = :path WHERE titre = :titre";
        $stmt = $bdd->prepare($query);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':path', $path);

        // Execute the statement
        if ($stmt->execute()) {
            header('Location: gest.php');
            exit();
        } else {
            echo "Error updating record: " . $stmt->errorInfo()[2];
        }
    }

    $images = $bdd->query("SELECT titre, path FROM images ORDER BY titre")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - Modifier les chemins des images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        header {
            margin-bottom: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        section {
            margin: 0 auto;
            width: 80%;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        button {
            padding: 5px 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
    if ($role == 'admin') {
        include '../admin/header_admin.php';
    } else {
        include '../admin/header_gest.php';
    }
?>
<h1>Administration - Modifier les chemins des images</h1>
    <section>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Chemin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                    <form method="post">
                        <td>
                            <input type="hidden" name="titre" value="<?php echo htmlspecialchars($image['titre']); ?>">
                            <?php echo htmlspecialchars($image['titre']); ?>
                        </td>
                        <td>
                            <input type="text" name="path" value="<?php echo htmlspecialchars($image['path']); ?>">
                        </td>
                        <td>
                            <button type="submit">Enregistrer</button>
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
