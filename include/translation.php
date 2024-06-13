// include/translations.php
<?php
include("connexion.inc.php");

function getTranslation($key, $lang, $bdd) {
    $stmt = $bdd->prepare("SELECT translation FROM trad WHERE key = :key AND lang = :lang");
    if ($stmt->execute(['key' => $key, 'lang' => $lang])) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['translation'] : $key;
    } else {
        return $key;
    }
}

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

$title = getTranslation('title', $lang, $bdd);
$header_title = getTranslation('header_title', $lang, $bdd);
$francois_title = getTranslation('francois_title', $lang, $bdd);
$francois_text = getTranslation('francois_text', $lang, $bdd);
$learn_more = getTranslation('learn_more', $lang, $bdd);
$forest_title = getTranslation('forest_title', $lang, $bdd);
$forest_more = getTranslation('forest_more', $lang, $bdd);
$castle_hours = getTranslation('castle_hours', $lang, $bdd);
?>
