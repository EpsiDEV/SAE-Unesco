<?php
include("../include/connexion.inc.php");

function getTranslation($key, $lang, $bdd) {
    $stmt = $bdd->prepare("SELECT translation FROM trad WHERE key = :key AND lang = :lang");
    if ($stmt->execute(['key' => $key, 'lang' => $lang])) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['translation'] : $key;
    } else {
        return $key;
    }
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

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';
$home = getTranslation('home', $lang, $bdd);
$plan = getTranslation('plan', $lang, $bdd);
$architecture = getTranslation('architecture', $lang, $bdd);
$histoire = getTranslation('histoire', $lang, $bdd);
$jardin = getTranslation('jardin', $lang, $bdd);
$about = getTranslation('about', $lang, $bdd);

$title = getTranslation('title', $lang, $bdd);
$header_title = getTranslation('header_title', $lang, $bdd);
$francois_title = getTranslation('francois_title', $lang, $bdd);
$francois_text = getTranslation('francois_text', $lang, $bdd);
$learn_more = getTranslation('learn_more', $lang, $bdd);
$forest_title = getTranslation('forest_title', $lang, $bdd);
$forest_more = getTranslation('forest_more', $lang, $bdd);
$castle_hours = getTranslation('castle_hours', $lang, $bdd);

$francois_image = getImagePath('francois_premier_accueil', $bdd);
$france_flag_image = getImagePath('drapeau_france_header', $bdd);
$uk_flag_image = getImagePath('drapeau_royaume_uni_header', $bdd);
$spain_flag_image = getImagePath('drapeau_espagne_header', $bdd);
$logo = getImagePath('logo_iut_footer', $bdd);

$login = getTranslation('login', $lang, $bdd);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Fontainebleau - UNESCO" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://epsidev.github.io/SAE-Unesco" />
    <meta
      property="og:image"
      content="https://www.mydailydriver.fr/img/excursion/21/banner/crop/fontainebleau-castle-5c6440962858f.jpg"
    />
    <meta
      property="og:description"
      content="Un site web réalisé par 3 étudiants en BUT Informatique ayant pour but de mettre en lumière le patrimoine de Fontainebleau."
    />
    <meta name="theme-color" content="#FF0000" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo $logo; ?>" />
    <link rel="stylesheet" href="../css/style.css.php" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://db.onlinewebfonts.com/a/fFdx9aaQTqZZ01nqPsTAj0nmjQRRR3uMREwFN1QZtpvC92BnjoXvE3Ire9407myIbd2392Uj"
      rel="stylesheet"
      type="text/css"
    />
    <link rel="preload" href="../css/style.css" as="style" />
  </head>

  <body>
    <!-- Le haut de page -->

    <header class="header-accueil">
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
          <a href="index.php?lang=fr"><img src="<?php echo $france_flag_image; ?>" /></a>
          <a href="index.php?lang=en"><img src="<?php echo $uk_flag_image; ?>" /></a>
          <a href="index.php?lang=es"><img src="<?php echo $spain_flag_image; ?>" /></a>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
          <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
        </div>
      </nav>
      <!-- Fin nav bar -->

      <h1 class="titre-principal"><?php echo $header_title; ?></h1>
    </header>

    <!-- Petite présentation concernant Francois 1er -->

    <section class="section-francois">
      <div class="partie-gauche">
        <h2><?php echo $francois_title; ?></h2>
        <p><?php echo $francois_text; ?></p>
        <a href="histoire.php?lang=<?php echo $lang; ?>#lien-francois">
          <div class="ensavoir">
            <p><?php echo $learn_more; ?> <i class="fa-solid fa-arrow-right"></i></p>
          </div>
        </a>
      </div>
      <img src="<?php echo $francois_image; ?>" alt="francois" border="0" />
    </section>

    <!-- Section Forêt -->

    <section class="foret">
      <h1><?php echo $forest_title; ?></h1>
      <a href="">
        <div class="ensavoir">
          <p><?php echo $forest_more; ?> <i class="fa-solid fa-arrow-right"></i></p>
        </div>
      </a>
    </section>

    <section class="horaires">
      <h1><i class="fa-solid fa-arrow-right"></i> <a href="https://www.chateaudefontainebleau.fr/preparez-votre-visite/horaires-et-tarifs/#horaire" target="_blank"><?php echo $castle_hours; ?></a></h1>
    </section>

    <?php include("../include/footer.inc.php"); ?>

    <script>
      function toggleMenu() {
        var navList = document.querySelector(".header-accueil .nav-bar ul");
        navList.classList.toggle("active");
      }
    </script>
  </body>
</html>
