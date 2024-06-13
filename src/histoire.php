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

$francois = getImagePath('francois_histoire', $bdd);
$cour_adieu = getImagePath('cour_adieu_histoire', $bdd);
$abdiction = getImagePath('abdication_histoire', $bdd);
$actuel = getImagePath('nos_jours_histoire', $bdd);
$allemagne = getImagePath('allemagne_histoire', $bdd);
$charle = getImagePath('charle_histoire', $bdd);
$creation = getImagePath('creation_histoire', $bdd);
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

$creation_title = getTranslation('creation_title', $lang, $bdd);
$creation_date = getTranslation('creation_date', $lang, $bdd);
$creation_text_before_more = getTranslation('creation_text_before_more', $lang, $bdd);
$creation_text_after_more = getTranslation('creation_text_after_more', $lang, $bdd);
$francois_title = getTranslation('francois_title', $lang, $bdd);
$francois_date = getTranslation('francois_date', $lang, $bdd);
$francois_text_before_more = getTranslation('francois_text_before_more', $lang, $bdd);
$francois_text_after_more = getTranslation('francois_text_after_more', $lang, $bdd);
$henri_title = getTranslation('henri_title', $lang, $bdd);
$henri_date = getTranslation('henri_date', $lang, $bdd);
$henri_text_before_more = getTranslation('henri_text_before_more', $lang, $bdd);
$henri_text_after_more = getTranslation('henri_text_after_more', $lang, $bdd);
$napoleon_title = getTranslation('napoleon_title', $lang, $bdd);
$napoleon_date = getTranslation('napoleon_date', $lang, $bdd);
$napoleon_text_before_more = getTranslation('napoleon_text_before_more', $lang, $bdd);
$napoleon_text_after_more = getTranslation('napoleon_text_after_more', $lang, $bdd);
$charles_title = getTranslation('charles_title', $lang, $bdd);
$charles_date = getTranslation('charles_date', $lang, $bdd);
$charles_text_before_more = getTranslation('charles_text_before_more', $lang, $bdd);
$charles_text_after_more = getTranslation('charles_text_after_more', $lang, $bdd);
$occupation_title = getTranslation('occupation_title', $lang, $bdd);
$occupation_date = getTranslation('occupation_date', $lang, $bdd);
$occupation_text_before_more = getTranslation('occupation_text_before_more', $lang, $bdd);
$occupation_text_after_more = getTranslation('occupation_text_after_more', $lang, $bdd);
$nowadays_title = getTranslation('nowadays_title', $lang, $bdd);
$nowadays_text_before_more = getTranslation('nowadays_text_before_more', $lang, $bdd);
$nowadays_text_after_more = getTranslation('nowadays_text_after_more', $lang, $bdd);

$read_more = getTranslation('read_more', $lang, $bdd);
$read_less = getTranslation('read_less', $lang, $bdd);

$login = getTranslation('login', $lang, $bdd);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Histoire</title>
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
  <!-- Haut de la page -->
  <script>
    function readMore(i) {
      var dots = document.getElementById("dots" + i);
      var moreText = document.getElementById("more" + i);
      var lien = document.getElementById("lien" + i);

      if (dots.style.display === "none") {
        dots.style.display = "inline";
        lien.innerHTML = "<?php echo $read_more; ?>";
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        lien.innerHTML = "<?php echo $read_less; ?>";
        moreText.style.display = "inline";
      }
    }
  </script>

  <style>
    #more1, #more2, #more3, #more4, #more5, #more6, #more7 {display: none;}
  </style>

  <header class="header-accueil header-histoire">
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
          <a href="histoire.php?lang=fr"><img src="<?php echo $france_flag_image; ?>" /></a>
          <a href="histoire.php?lang=en"><img src="<?php echo $uk_flag_image; ?>" /></a>
          <a href="histoire.php?lang=es"><img src="<?php echo $spain_flag_image; ?>" /></a>
        </div>
        <div class="menu-icon" onclick="toggleMenu()">
          <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
        </div>
    </nav>
    <!-- Fin nav bar -->
    <h1 class="titre-principal"><?php echo $histoire ?></h1>
  </header>

  <div class="frise" data-aos="fade-down">
    <div class="conteneur gauche">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-right" data-aos-duration="1000">
        <h2><?php echo $creation_title; ?></h2>
        <small><?php echo $creation_date; ?></small>
        <p>
          <?php echo $creation_text_before_more; ?><span id="dots1">..</span><span id="more1"> 
          <?php echo $creation_text_after_more; ?>
          </span>
          <br/><span id="lien1" onclick="readMore(1)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $creation; ?>" />
      </div>
    </div>

    <div class="conteneur droite" id="lien-francois">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-left" data-aos-duration="1000">
        <h2><?php echo $francois_title; ?></h2>
        <small><?php echo $francois_date; ?></small>
        <p>
          <?php echo $francois_text_before_more; ?><span id="dots2">..</span><span id="more2"> 
          <?php echo $francois_text_after_more; ?>
          </span> 
          <br/><span id="lien2" onclick="readMore(2)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $francois; ?>" />
      </div>
    </div>

    <div class="conteneur gauche">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-right" data-aos-duration="1000">
        <h2><?php echo $henri_title; ?></h2>
        <small><?php echo $henri_date; ?></small>
        <p>
          <?php echo $henri_text_before_more; ?><span id="dots3">..</span><span id="more3">
          <?php echo $henri_text_after_more; ?>
          </span> 
          <br/><span id="lien3" onclick="readMore(3)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $cour_adieu; ?>" />
      </div>
    </div>

    <div class="conteneur droite" id="lien-napoleon" data-aos-duration="1000">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-left">
        <h2><?php echo $napoleon_title; ?></h2>
        <small><?php echo $napoleon_date; ?></small>
        <p>
          <?php echo $napoleon_text_before_more; ?><span id="dots4">..</span><span id="more4">
          <?php echo $napoleon_text_after_more; ?>
          </span>
          <br/><span id="lien4" onclick="readMore(4)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $abdiction; ?>" />
      </div>
    </div>

    <div class="conteneur gauche">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-right" data-aos-duration="1000">
        <h2><?php echo $charles_title; ?></h2>
        <small><?php echo $charles_date; ?></small>
        <p>
          <?php echo $charles_text_before_more; ?><span id="dots5">..</span><span id="more5">
          <?php echo $charles_text_after_more; ?>
          </span>
          <br/><span id="lien5" onclick="readMore(5)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $charle; ?>" />
      </div>
    </div>

    <div class="conteneur droite">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-left" data-aos-duration="1000">
        <h2><?php echo $occupation_title; ?></h2>
        <small><?php echo $occupation_date; ?></small>
        <p>
          <?php echo $occupation_text_before_more; ?><span id="dots6">..</span><span id="more6">
          <?php echo $occupation_text_after_more; ?>
          </span>
          <br/><span id="lien6" onclick="readMore(6)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $allemagne; ?>" />
      </div>
    </div>

    <div class="conteneur gauche">
      <i class="fa-solid fa-circle point-frise" data-aos="fade-down" data-aos-duration="1000"
        style="color: #ea5b0c"></i>
      <div class="texte" data-aos="fade-right" data-aos-duration="1000">
        <h2><?php echo $nowadays_title; ?></h2>
        <p>
          <?php echo $nowadays_text_before_more; ?><span id="dots7">..</span><span id="more7">
          <?php echo $nowadays_text_after_more; ?>
          </span>
          <br/><span id="lien7" onclick="readMore(7)" class="read_more"><?php echo $read_more; ?></span>
        </p>
        <img src="<?php echo $actuel; ?>" />
      </div>
    </div>
  </div>

  <?php include("../include/footer.inc.php") ?>

  <!-- Import pour les animations au scroll -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script>
    function toggleMenu() {
      var navList = document.querySelector(".header-accueil .nav-bar ul");
      navList.classList.toggle("active");
    }
  </script>
</body>

</html>