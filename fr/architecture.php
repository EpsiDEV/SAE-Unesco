<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Architecture</title>
    <link rel="icon" href="../assets/logo.png" />
    <link rel="stylesheet" href="../css/style.css" />
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
    <header class="header-accueil header-architecture">
      <?php include("../include/header.inc.php") ?>
      <h1 class="titre-principal">Architecture</h1>
    </header>

    <h1>Les merveilles de l'architecture</h1>

    <main class="conteneur-jardins">
      <div class="element">
        <img src="../assets/architecture/escalier-fer-a-cheval.jpeg" />
        <h3>Escalier en Fer à Cheval</h3>
        <p>
          Symbole du château de Fontainebleau, le célèbre escalier en fer à
          cheval est un ouvrage du règne de Louis XIII.
        </p>
      </div>

      <div class="element">
        <img src="../assets/architecture/galerie-francois-1er.jpeg" />
        <h3>La galerie François Ier</h3>
        <p>
          La galerie François- Ier est une grande galerie d'apparat située au
          premier étage du château royal de Fontainebleau.
        </p>
      </div>

      <div class="element">
        <img src="../assets/architecture/galerie-des-cerfs.jpeg" />
        <h3>La galerie des cerfs</h3>
        <p>
          Décorée de vues cavalières des domaines de chasses royaux, cette vaste
          galerie de 74m de long et 7m de large édifiée par Henri IV.
        </p>
      </div>
    </main>

    <section class="conteneur-architecture">
      <div class="composant-architecture">
        <img src="../assets/architecture/chambre-royale.png" alt="" />
        <p align="center">
          Ancienne chambre royale transformée par Napoléon en 1804, devenant le
          salon de l'empereur puis la salle du trône en 1808. Datant du XVIIe
          siècle, elle arbore des éléments remarquables comme le plafond aux
          armoiries, le lambris, les portes à fronton, et des bas-reliefs
          guerriers. Boiseries ornées de l'emblème de Louis XIII. Lire la
          suite...
        </p>
      </div>
      <div class="composant-architecture">
        <img src="../assets/architecture/cour.png" alt="" />
        <p align="center">
          Ancienne basse-cour devenue la cour d'Honneur du château au 17e
          siècle, elle fut transformée par Napoléon Ier, qui remplaça l'aile
          Ferrare par la grille d'honneur actuelle. Célèbre pour l'escalier en
          fer à cheval conçu par Jean-Androuet du Cerceau en 1632-1634, la cour
          fut le lieu des adieux de Napoléon à sa garde le 20 avril 1814. Lire
          la suite...
        </p>
      </div>
      <div class="composant-architecture">
        <img src="../assets/architecture/salle-cheminee.png" />
        <p align="center">
          Henri IV a grandement enrichi l'esthétique du château de
          Fontainebleau, appréciant la quiétude loin de Paris. Entre 1600 et
          1610, il a attiré les meilleurs artistes d'Europe du Nord. La salle de
          la Belle Cheminée conserve le portrait en marbre de Henri IV à cheval,
          réalisé par Mathieu Jacquet, témoignant de cette époque florissante.
          Lire la suite...
        </p>
      </div>
    </section>

    <?php include("../include/footer.inc.php") ?>
  </body>
</html>
