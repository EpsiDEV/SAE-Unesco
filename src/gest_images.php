<?php
    include("../include/connexion.inc.php");
    session_start();

    // Check if user is logged in
    if (!isset($_SESSION['id'])) {
        header('Location: ../fr/connexion.php');
        exit();
    }

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Administration - Modifier les chemins des images</title>
</head>
<body>
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
                            <button type="submit">Save</button>
                        </td>
                    </form>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
