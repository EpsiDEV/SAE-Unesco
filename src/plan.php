<?php

include("../include/connexion.inc.php");
$pdo = $bdd;

function getTranslation($key, $lang, $bdd) {
    $stmt = $bdd->prepare("SELECT translation FROM trad WHERE key = :key AND lang = :lang");
    $stmt->execute(['key' => $key, 'lang' => $lang]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ? $result['translation'] : $key;
}

function getImagePath($title, $bdd) {
  $stmt = $bdd->prepare("SELECT path FROM images WHERE titre = :title");
  if ($stmt->execute(['title' => $title])) {
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result ? $result['path'] : '';
  } else {
      return '';
  }
}

$logo = getImagePath('logo_iut_footer', $bdd);
$logo = getImagePath('logo_iut_footer', $bdd);
$france_flag_image = getImagePath('drapeau_france_header', $bdd);
$uk_flag_image = getImagePath('drapeau_royaume_uni_header', $bdd);
$spain_flag_image = getImagePath('drapeau_espagne_header', $bdd);

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

$title = getTranslation('title', $lang, $bdd);
$home = getTranslation('home', $lang, $bdd);
$plan = getTranslation('plan', $lang, $bdd);
$architecture = getTranslation('architecture', $lang, $bdd);
$histoire = getTranslation('histoire', $lang, $bdd);
$jardin = getTranslation('jardin', $lang, $bdd);
$about = getTranslation('about', $lang, $bdd);
$chateau_location = getTranslation('chateau_location', $lang, $bdd);
$parc_location = getTranslation('parc_location', $lang, $bdd);

$login = getTranslation('login', $lang, $bdd);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="../css/style.css.php" />
    <link rel="icon" href="<?php echo $logo; ?>" />
    <link href="https://db.onlinewebfonts.com/a/fFdx9aaQTqZZ01nqPsTAj0nmjQRRR3uMREwFN1QZtpvC92BnjoXvE3Ire9407myIbd2392Uj"
        rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preload" href="../css/style.css" as="style" />
</head>

<body>
    <header class="header-accueil header-plan">
        <!-- Début nav bar -->
        <nav class="nav-bar">
          <ul>
            <li><a href="index.php?lang=<?php echo $lang; ?>"><?php echo $home; ?></a></li>
            <li><a href="plan.php?lang=<?php echo $lang; ?>"><?php echo $plan; ?></a></li>
            <li><a href="architecture.php?lang=<?php echo $lang; ?>"><?php echo $architecture; ?></a></li>
            <li><a href="histoire.php?lang=<?php echo $lang; ?>"><?php echo $histoire; ?></a></li>
            <li><a href="jardin.php?lang=<?php echo $lang; ?>"><?php echo $jardin; ?></a></li>
            <li><a href="about.php?lang=<?php echo $lang; ?>"><?php echo $about; ?></a></li>
            <a href="connexion.php" class="connect"><?php echo $login; ?></a>
          </ul>
          <div class="choix-langues">
            <a href="plan.php?lang=fr"><img src="../assets/france.png" /></a>
            <a href="plan.php?lang=en"><img src="../assets/royaume-uni.png" /></a>
            <a href="plan.php?lang=es"><img src="../assets/espagne.png" /></a>
          </div>
          <div class="menu-icon" onclick="toggleMenu()">
            <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
          </div>
      </nav>
      <!-- Fin nav bar -->

        <h1 class="titre-principal"><?php echo $plan; ?></h1>
    </header>
    
    <main class="composant-cartes">
        <div class="carte">
            <h1><?php echo $chateau_location; ?></h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2648.835333251912!2d2.696909476789917!3d48.402105332707755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f488ad7ca349%3A0xff5eea6f01c3ab80!2sCh%C3%A2teau%20de%20Fontainebleau!5e0!3m2!1sfr!2sfr!4v1711708047471!5m2!1sfr!2sfr" width="800px" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="carte">
            <h1><?php echo $parc_location; ?></h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5298.046234497696!2d2.6863509935791057!3d48.3984992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5f48ff52e989f%3A0x4873c571cce2112f!2sJardin%20Anglais!5e0!3m2!1sfr!2sfr!4v1711708666500!5m2!1sfr!2sfr" width="800px" height="600px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    
    <?php include("../include/footer.inc.php") ?>

    <script>
      function toggleMenu() {
        var navList = document.querySelector(".header-accueil .nav-bar ul");
        navList.classList.toggle("active");
      }
    </script>
</body>

</html>
