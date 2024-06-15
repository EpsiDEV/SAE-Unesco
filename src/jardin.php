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

$grotte = getImagePath('grotte_pin_jardin', $bdd);
$parc_img = getImagePath('parc_jardin', $bdd);
$porte = getImagePath('porte_baptistere_jardin', $bdd);
$cour_office = getImagePath('cour_offices_jardin', $bdd);
$etang = getImagePath('etang_carpes_jardin', $bdd);
$grand_parterre_img = getImagePath('grand_parterre_jardin', $bdd);
$logo = getImagePath('logo_iut_footer', $bdd);
$france_flag_image = getImagePath('drapeau_france_header', $bdd);
$uk_flag_image = getImagePath('drapeau_royaume_uni_header', $bdd);
$spain_flag_image = getImagePath('drapeau_espagne_header', $bdd);

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

$horaires_titre = getTranslation('horaires_titre', $lang, $bdd);
$horaires_lien = getTranslation('horaires_lien', $lang, $bdd);

$etang_carpes = getTranslation('etang_carpes', $lang, $bdd);
$etang_carpes_text = getTranslation('etang_carpes_text', $lang, $bdd);
$grotte_pins = getTranslation('grotte_pins', $lang, $bdd);
$grotte_pins_text = getTranslation('grotte_pins_text', $lang, $bdd);
$grand_parterre = getTranslation('grand_parterre', $lang, $bdd);
$grand_parterre_text = getTranslation('grand_parterre_text', $lang, $bdd);
$parc = getTranslation('parc', $lang, $bdd);
$parc_text = getTranslation('parc_text', $lang, $bdd);
$cour_offices = getTranslation('cour_offices', $lang, $bdd);
$cour_offices_text = getTranslation('cour_offices_text', $lang, $bdd);
$porte_baptistere = getTranslation('porte_baptistere', $lang, $bdd);
$porte_baptistere_text = getTranslation('porte_baptistere_text', $lang, $bdd);

$login = getTranslation('login', $lang, $bdd);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $jardin; ?></title>
  <link rel="stylesheet" href="../css/style.css.php" />
  <link rel="icon" href="<?php echo $logo; ?>" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://db.onlinewebfonts.com/a/fFdx9aaQTqZZ01nqPsTAj0nmjQRRR3uMREwFN1QZtpvC92BnjoXvE3Ire9407myIbd2392Uj"
    rel="stylesheet" type="text/css" />
  <link rel="preload" href="../css/style.css" as="style" />
</head>

<body>
  <!-- Haut de page -->
  <header class="header-accueil header-jardins">
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
          <a href="jardin.php?lang=fr"><img src="<?php echo $france_flag_image; ?>" /></a>
          <a href="jardin.php?lang=en"><img src="<?php echo $uk_flag_image; ?>" /></a>
          <a href="jardin.php?lang=es"><img src="<?php echo $spain_flag_image; ?>" /></a>
      </div>
      <div class="menu-icon" onclick="toggleMenu()">
        <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
      </div>
    </nav>
    <!-- Fin nav bar -->
    <h1 class="titre-principal"><?php echo $jardin; ?></h1>
  </header>

  <main class="conteneur-jardins">
    <div class="element">
      <img src="<?php echo $etang; ?>" />
      <h3><?php echo $etang_carpes; ?></h3>
      <p>
        <?php echo $etang_carpes_text; ?>
      </p>
    </div>

    <div class="element">
      <img src="<?php echo $grotte; ?>" />
      <h3><?php echo $grotte_pins; ?></h3>
      <p>
        <?php echo $grotte_pins_text; ?>
      </p>
    </div>

    <div class="element">
      <img src="<?php echo $grand_parterre_img; ?>" />
      <h3><?php echo $grand_parterre; ?></h3>
      <p>
        <?php echo $grand_parterre_text; ?>
      </p>
    </div>
  </main>

  <div class="parc" id="lien-parc">
    <img src="<?php echo $parc_img; ?>" />
    <h3><?php echo $parc; ?></h3>
    <p>
      <?php echo $parc_text; ?>
    </p>
  </div>

  <div class="fin-jardins">
    <div class="element">
      <img src="<?php echo $cour_office; ?>" />
      <h3><?php echo $cour_offices; ?></h3>
      <p>
        <?php echo $cour_offices_text; ?>
      </p>
    </div>

    <div class="element">
      <img src="<?php echo $porte; ?>" />
      <h3><?php echo $porte_baptistere; ?></h3>
      <p>
        <?php echo $porte_baptistere_text; ?>
      </p>
    </div>
  </div>

  <section class="horaires">
    <a href="https://www.chateaudefontainebleau.fr/preparez-votre-visite/horaires-et-tarifs/#horaire">
      <h1><i class="fa-solid fa-arrow-right"></i> <?php echo $horaires_lien; ?></h1>
    </a>
  </section>

  <?php include("../include/footer.inc.php") ?>

  <script>
    function toggleMenu() {
      var navList = document.querySelector(".header-accueil .nav-bar ul");
      navList.classList.toggle("active");
    }
  </script>
</body>

</html>