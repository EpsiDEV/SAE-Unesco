<?php
include("../include/connexion.inc.php");

$pdo = $bdd;

function getTranslation($pdo, $key, $lang) {
    $stmt = $pdo->prepare("SELECT translation FROM trad WHERE key = ? AND lang = ?");
    $stmt->execute([$key, $lang]);
    $result = $stmt->fetchColumn();
    return $result ? $result : "Translation not found";
}

$lang = isset($_GET['lang']) ? $_GET['lang'] : 'fr';

$home = getTranslation($pdo, 'home', $lang);
$plan = getTranslation($pdo, 'plan', $lang);
$architecture = getTranslation($pdo, 'architecture', $lang);
$histoire = getTranslation($pdo, 'histoire', $lang);
$jardin = getTranslation($pdo, 'jardin', $lang);
$about = getTranslation($pdo, 'about', $lang);

$horseshoe_staircase = getTranslation($pdo, 'horseshoe_staircase', $lang);
$gallery_francois = getTranslation($pdo, 'gallery_francois', $lang);
$gallery_stags = getTranslation($pdo, 'gallery_stags', $lang);
$title_architecture = getTranslation($pdo, 'title_architecture', $lang);
$wonders_architecture = getTranslation($pdo, 'wonders_architecture', $lang);

$royalChamber = getTranslation($pdo, 'royal_chamber', $lang);
$courtyard = getTranslation($pdo, 'courtyard', $lang);
$fireplaceRoom = getTranslation($pdo, 'fireplace_room', $lang);
$gallery_francois_desc = getTranslation($pdo, 'gallery_francois_desc', $lang);
$gallery_stags_desc = getTranslation($pdo, 'gallery_stags_desc', $lang);
$horseshoe_staircase_desc = getTranslation($pdo, 'horseshoe_staircase_desc', $lang);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title_architecture; ?></title>
    <link rel="icon" href="../assets/logo.png" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://db.onlinewebfonts.com/a/fFdx9aaQTqZZ01nqPsTAj0nmjQRRR3uMREwFN1QZtpvC92BnjoXvE3Ire9407myIbd2392Uj"
          rel="stylesheet" type="text/css" />
    <link rel="preload" href="../css/style.css" as="style" />
</head>
<body>
<header class="header-accueil header-architecture">
      <!-- Début nav bar -->
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
          <a href="architecture.php?lang=fr"><img src="../assets/france.png" /></a>
          <a href="architecture.php?lang=en"><img src="../assets/royaume-uni.png" /></a>
          <a href="architecture.php?lang=es"><img src="../assets/espagne.png" /></a>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
          <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
        </div>
    </nav>
    <!-- Fin nav bar -->

    <h1 class="titre-principal"><?php echo $title_architecture; ?></h1>
</header>

<h1 class="merveille"><?php echo $wonders_architecture; ?></h1>

<main class="conteneur-jardins">
    <div class="element">
        <img src="../assets/architecture/escalier-fer-a-cheval.jpeg"/>
        <h3><?php echo $horseshoe_staircase; ?></h3>
        <p>
            <?php echo $horseshoe_staircase_desc; ?>
        </p>
    </div>

    <div class="element">
        <img src="../assets/architecture/galerie-francois-1er.jpeg"/>
        <h3><?php echo $gallery_francois; ?></h3>
        <p>
            <?php echo $gallery_francois_desc; ?>
        </p>
    </div>

    <div class="element">
        <img src="../assets/architecture/galerie-des-cerfs.jpeg"/>
        <h3><?php echo $gallery_stags; ?></h3>
        <p>
            <?php echo $gallery_stags_desc; ?>
        </p>
    </div>
</main>

<section class="conteneur-architecture">
    <div class="composant-architecture">
        <img src="../assets/architecture/chambre-royale.png" alt=""/>
        <p align="center">
            <?php echo $royalChamber ?>
        </p>
    </div>
    <div class="composant-architecture">
        <img src="../assets/architecture/cour.png" alt=""/>
        <p align="center">
            <?php echo $courtyard ?>
        </p>
    </div>
    <div class="composant-architecture">
        <img src="../assets/architecture/salle-cheminee.png"/>
        <p align="center">
            <?php echo $fireplaceRoom ?>
        </p>
    </div>
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
