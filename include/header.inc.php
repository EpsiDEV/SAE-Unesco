<?php
include("connexion.inc.php");
// function to fetch translations
if (!function_exists('getTranslation')) {
  function getTranslation($key, $lang, $bdd) {
      $stmt = $bdd->prepare("SELECT translation FROM trad WHERE key = :key AND lang = :lang");
      if ($stmt->execute(['key' => $key, 'lang' => $lang])) {
          $result = $stmt->fetch(PDO::FETCH_ASSOC);
          return $result ? $result['translation'] : $key; // Return key if no translation found
      } else {
          return $key; // Return key if query fails
      }
  }
}

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';


$home = getTranslation('home', $lang, $bdd);
$plan = getTranslation('plan', $lang, $bdd);
$architecture = getTranslation('architecture', $lang, $bdd);
$histoire = getTranslation('histoire', $lang, $bdd);
$jardin = getTranslation('jardin', $lang, $bdd);
$about = getTranslation('about', $lang, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontainebleau</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header>
<nav class="nav-bar">
        <ul>
          <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo $home; ?></a></li>
          <li><a href="plan.php?lang=<?php echo $lang; ?>"><?php echo $plan; ?></a></li>
          <li><a href="architecture.php?lang=<?php echo $lang; ?>"><?php echo $architecture; ?></a></li>
          <li><a href="histoire.php?lang=<?php echo $lang; ?>"><?php echo $histoire; ?></a></li>
          <li><a href="jardin.php?lang=<?php echo $lang; ?>"><?php echo $jardin; ?></a></li>
          <li><a href="about.php?lang=<?php echo $lang; ?>"><?php echo $about; ?></a></li>
          <a href="../fr/connexion.php" class="connect">Se connecter</a>
        </ul>
        <div class="choix-langues">
          <a href="index.php?lang=fr"><img src="../assets/france.png" /></a>
          <a href="index.php?lang=en"><img src="../assets/royaume-uni.png" /></a>
          <a href="index.php?lang=es"><img src="../assets/espagne.png" /></a>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
          <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
        </div>
      </nav>
</header>
</body> 
</html>


