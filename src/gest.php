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
    $section = $_POST['section'];
    $translation = $_POST['translation'];
    $lang = $_POST['lang'];

    $stmt = $bdd->prepare("UPDATE trad SET translation = :translation WHERE key = :section AND lang = :lang");
    $stmt->execute(['translation' => $translation, 'section' => $section, 'lang' => $lang]);
    header('Location: gest.php');
    exit;
}

$sections = $bdd->query("SELECT key, lang, translation FROM trad ORDER BY key, lang")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Administration - Modifier les traductions</title>
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 0 auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        textarea {
            width: 100%;
            height: 50px;
            resize: none;
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
    <h1>Administration - Modifier les traductions</h1>
    <table>
        <thead>
            <tr>
                <th>Section</th>
                <th>Langue</th>
                <th>Traduction</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sections as $section): ?>
            <tr>
                <form method="post">
                    <td>
                        <input type="hidden" name="section" value="<?php echo htmlspecialchars($section['key']); ?>">
                        <?php echo htmlspecialchars($section['key']); ?>
                    </td>
                    <td>
                        <input type="hidden" name="lang" value="<?php echo htmlspecialchars($section['lang']); ?>">
                        <?php echo htmlspecialchars($section['lang']); ?>
                    </td>
                    <td>
                        <textarea name="translation"><?php echo htmlspecialchars($section['translation']); ?></textarea>
                    </td>
                    <td>
                        <button type="submit">Enregistrer</button>
                    </td>
                </form>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>