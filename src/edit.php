<?php
include("../include/connexion.inc.php");
session_start();

if (!isset($_SESSION['role']) || !in_array($_SESSION['role'], ['admin', 'gest'])) {
    header('Location: login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $section = $_POST['section'];
    $translation = $_POST['translation'];
    $lang = $_POST['lang'];

    $stmt = $bdd->prepare("UPDATE trad SET translation = :translation WHERE key = :section AND lang = :lang");
    $stmt->execute(['translation' => $translation, 'section' => $section, 'lang' => $lang]);
    header('Location: index.php');
    exit;
}

$section = $_GET['section'];
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

$stmt = $bdd->prepare("SELECT translation FROM trad WHERE key = :section AND lang = :lang");
$stmt->execute(['section' => $section, 'lang' => $lang]);
$translation = $stmt->fetch(PDO::FETCH_ASSOC)['translation'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier le contenu</title>
</head>
<body>
    <form method="post">
        <input type="hidden" name="section" value="<?php echo htmlspecialchars($section); ?>">
        <input type="hidden" name="lang" value="<?php echo htmlspecialchars($lang); ?>">
        <label for="translation">Contenu :</label>
        <textarea name="translation" id="translation" rows="10" cols="50"><?php echo htmlspecialchars($translation); ?></textarea>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>
