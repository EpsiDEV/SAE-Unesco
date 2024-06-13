<?php
include("../include/connexion.inc.php");
session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    header('Location: ../fr/connexion.php');
    exit();
}

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
</head>
<body>
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
                        <textarea name="translation" rows="2" cols="50"><?php echo htmlspecialchars($section['translation']); ?></textarea>
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
