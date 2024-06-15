<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);


if (!isset($_SESSION['id']) || $_SESSION['role'] != "admin") {
    header('Location: ../src/connexion.php');
    exit();
}

// Include database connection
include("../include/connexion.inc.php");

// Handle delete request
if (isset($_POST['delete']) && isset($_POST['user_id'])) {
    // Implement CSRF protection
    if (!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
        die("CSRF token validation failed");
    }

    $user_id = $_POST['user_id'];
    $query = "DELETE FROM unesco.users WHERE id = :id";
    $stmt = $bdd->prepare($query);
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['create'])) {
    header('Location: create_gest.php');
    exit();
}


$csrf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $csrf_token;

$query = "SELECT id, username, password, role FROM unesco.users WHERE role = 'gest'";
$stmt = $bdd->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - Administrateur</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <?php include 'header_admin.php'; ?>
    <div class="container">
        <h1 class="mt-5">Tableau de Bord - Administrateur</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Rôle</th>
                    <th>Modifcation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td><?php echo htmlspecialchars($user['role']); ?></td>
                        <td>
                            <form method="post" action="">
                                <input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
                                <input type="hidden" name="csrf_token" value="<?php echo $csrf_token; ?>">
                                <button type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Vous êtes sûr de vouloir supprimer cet utilisateur ?')">Supprimer</button>
                                <a href="edit_gest.php?user_id=<?php echo $user['id']; ?>" class="btn btn-secondary">Modifier</a>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" action="">
            <button type="submit" name="create" class="btn btn-primary">Créer un nouveau gestionnaire</button>
        </form>
    </div>
</body>
</html>

