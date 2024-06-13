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

function getImagePath($title, $pdo) {
  $stmt = $pdo->prepare("SELECT path FROM images WHERE titre = :title");
  if ($stmt->execute(['title' => $title])) {
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result ? $result['path'] : '';
  } else {
      return '';
  }
}

$jawed = getImagePath('jawed_about', $bdd);
$kirushi = getImagePath('kirushi_about', $bdd);
$victor = getImagePath('victor_about', $bdd);
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
$login = getTranslation('login', $lang, $bdd);

$title_about = getTranslation('title_about', $lang, $bdd);
$mentions_title = getTranslation('mentions_title', $lang, $bdd);
$mentions_paragraph1 = getTranslation('mentions_paragraph1', $lang, $bdd);
$contact_title = getTranslation('contact_title', $lang, $bdd);
$name_label = getTranslation('name_label', $lang, $bdd);
$email_label = getTranslation('email_label', $lang, $bdd);
$message_label = getTranslation('message_label', $lang, $bdd);
$submit_button = getTranslation('submit_button', $lang, $bdd);
$fin_section = getTranslation('fin_section', $lang, $bdd);
$team_jawed = getTranslation('team_jawed', $lang, $bdd);
$team_kirushikesan = getTranslation('team_kirushikesan', $lang, $bdd);
$team_victor = getTranslation('team_victor', $lang, $bdd);
?>

<!DOCTYPE html>
<html lang="fr">
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
      content="Un site tout simplement incroyable réalisé par 4 étudiants en BUT Informatique qui va révolutionner le monde numérique et la façon dont nous utilisons la technologique."
    />
    <meta name="theme-color" content="#FF0000" />
    <title><?php echo $title_about; ?></title>
    <link rel="icon" href="<?php echo $logo; ?>" />
    <link rel="stylesheet" href="../css/about.css.php" />
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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
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
          <a href="about.php?lang=fr"><img src="<?php echo $france_flag_image; ?>" /></a>
          <a href="about.php?lang=en"><img src="<?php echo $uk_flag_image; ?>" /></a>
          <a href="about.php?lang=es"><img src="<?php echo $spain_flag_image; ?>" /></a>
          </div>
          <div class="menu-icon" onclick="toggleMenu()">
            <i class="fa-solid fa-bars" style="color: #f6f5f4"></i>
        </div>
      </nav>
      <!-- Fin nav bar -->
    </header>

    <h1 class="titre_principal"><?php echo $about; ?></h1>

    <main class="team_presentation">
      <div class="person">
        <img src="<?php echo $jawed; ?>" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Jawed</h2>
          <h4><?php echo $team_jawed; ?></h4>
          <div class="person_links">
            <a href="https://www.linkedin.com/in/jawed-essahli/" target="_blank"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
            <a href="https://github.com/Wedja10" target="_blank"
              ><i class="fa-brands fa-github"></i
            ></a>
          </div>
        </div>
      </div>

      <div class="person">
        <img src="<?php echo $kirushi; ?>" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Kirushikesan</h2>
          <h4><?php echo $team_kirushikesan; ?></h4>
          <div class="person_links">
            <a href="https://www.linkedin.com/in/elankeethan/" target="_blank"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
            <a href="https://github.com/Kirushield" target="_blank"
              ><i class="fa-brands fa-github"></i
            ></a>
          </div>
        </div>
      </div>
      <div class="person">
        <img src="<?php echo $victor; ?>" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Victor</h2>
          <h4><?php echo $team_victor; ?></h4>
          <div class="person_links">
            <a href="https://www.linkedin.com/in/victorsts/" target="_blank"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
            <a href="https://github.com/EpsiDEV" target="_blank"
              ><i class="fa-brands fa-github"></i
            ></a>
          </div>
        </div>
      </div>
    </main>

    <section class="mentions">
      <h2><?php echo $mentions_title; ?></h2>
      <div class="paragraphes">
        <p>
          <?php echo $mentions_paragraph1; ?>
        </p>
      </div>
    </section>

    <section class="contact">
      <h2><?php echo $contact_title; ?></h2>
      <form action="mailto: ">
        <div class="entree">
          <label for="name"><?php echo $name_label; ?></label>
          <input type="text" name="nom" placeholder="<?php echo $name_label; ?>" required />
        </div>

        <div class="entree">
          <label for="email"><?php echo $email_label; ?></label>
          <input
            type="email"
            name="email"
            placeholder="pierredupont@gmail.com"
            required
          />
        </div>

        <div class="entree">
          <label for="message"><?php echo $message_label; ?></label>
          <textarea
            name="message"
            id="message"
            cols="30"
            rows="5"
            placeholder="Message"
            required
          ></textarea>
        </div>

        <input id="submit" type="submit" value="Envoyer" />
      </form>
    </section>

    <section class="fin">
      <?php echo $fin_section; ?>
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
