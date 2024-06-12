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
    <title>À propos - Fontainebleau</title>
    <link rel="icon" href="../assets/logo.png" />
    <link rel="stylesheet" href="../css/about.css" />
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

  <!-- 
font-family: "Dyno Regular";
font-family: "Dyno Bold";
font-family: "Dyno Italic";
font-family: "Cicle Fina";
font-family: "Cicle Semi";
font-family: "Cicle Gordita";
font-family: "Cicle Semi Italic";
font-family: "Cicle Fina Italic";
font-family: "Cicle Gordita Italic";
-->

  <body>
    <!-- Le haut de page -->

    <header class="header-accueil">
    <?php include("../include/header-about.inc.php") ?>
    </header>

    <h1 class="titre_principal">À propos</h1>

    <main class="team_presentation">
      <div class="person">
        <img src="../assets/about/photo_test.jpg" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Jawed</h2>
          <h4>Chef d'équipe / Organisateur</h4>
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
        <img src="../assets/about/photo_test.jpg" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Kirushikesan</h2>
          <h4>Concepteur / Perfectionniste</h4>
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
        <img src="../assets/about/photo_test.jpg" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Kilian</h2>
          <h4>Propulseur</h4>
          <div class="person_links">
            <a href="https://www.linkedin.com/feed/" target="_blank"
              ><i class="fa-brands fa-linkedin"></i
            ></a>
            <a href="https://github.com/Kirushield" target="_blank"
              ><i class="fa-brands fa-github"></i
            ></a>
          </div>
        </div>
      </div>

      <div class="person">
        <img src="../assets/about/photo_test.jpg" class="person_photo" />
        <div class="person_details">
          <h2 class="person_name">Victor</h2>
          <h4>Expert / Coordinateur</h4>
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
      <h2>Mentions légales</h2>
      <div class="paragraphes">
        <p>
          Ce site et son contenu sont la propriété intellectuelle de
          L’Université Gustave Eiffel et de l'UNESCO. Toute reproduction ou
          représentation totale ou partielle de ce site ou de son contenu est
          interdite sans autorisation préalable.
        </p>
        <p>
          Les données personnelles collectées sur ce site sont destinées à
          L’Université Gustave Eiffel et de l'UNESCO dans le cadre de leur
          collaboration. Conformément à la loi, vous disposez d'un droit
          d'accès, de rectification et de suppression de vos données. Pour
          exercer ce droit, veuillez nous contacter à l'adresse indiquée
          ci-dessus.
        </p>
      </div>
    </section>

    <section class="contact">
      <h2>Nous contacter</h2>
      <form action="">
        <div class="entree">
          <label for="name">Votre nom</label>
          <input type="text" name="nom" placeholder="Dupont" required />
        </div>

        <div class="entree">
          <label for="email">Email</label>
          <input
            type="email"
            name="email"
            placeholder="pierredupont@gmail.com"
            required
          />
        </div>

        <div class="entree">
          <label for="message">Votre message</label>
          <textarea
            name="message"
            id="message"
            cols="30"
            rows="5"
            placeholder="Le message"
            required
          ></textarea>
        </div>

        <input id="submit" type="submit" value="Envoyer" />
      </form>
    </section>

    <section class="fin">
      Nous remercions toute l’équipe pédagogique de l’université Gustave Eiffel
      et en particulier nos professeurs : Monsieur Ettayeb ainsi que Monsieur
      Cessy de nous avoir accompagné dans ce projet.
    </section>

    <?php include("../include/footer-about.inc.php") ?>

    <script>
      function toggleMenu() {
        var navList = document.querySelector(".header-accueil .nav-bar ul");
        navList.classList.toggle("active");
      }
    </script>
  </body>
</html>
