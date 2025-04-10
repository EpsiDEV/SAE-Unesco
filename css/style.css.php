<?php
header("Content-Type: text/css");

include("../include/connexion.inc.php");
function getImagePath($title, $bdd) {
    $stmt = $bdd->prepare("SELECT path FROM images WHERE titre = :title");
    if ($stmt->execute(['title' => $title])) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $result['path'] : '';
    } else {
        return '';
    }
}

$parc_img = getImagePath('parc_jardin', $bdd);
$foret = getImagePath('foret_accueil', $bdd);
$bg_acceuil = getImagePath('bg_acceuil', $bdd);
$train = getImagePath('train_plan', $bdd);
$bg_histoire = getImagePath('bg_histoire', $bdd);
$bg_jardin = getImagePath('bg_jardin', $bdd);
$bg_architecture = getImagePath('bg_architecture_architecture', $bdd);
?>

@keyframes animation {
  from {
    opacity: 0;
    transform: translate(-50%, -40%);
  }

  to {
    opacity: 1;
    transform: translate(-50%, -50%);
  }
}

/* Réglages de base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}

body {
  background-color: #333;
  font-family: "Dyno Regular";
}

/* En tête de la page */

.header-accueil {
  width: 100%;
  height: 100vh;
  background-image: url(<?php echo $bg_acceuil; ?>);
  background-size: cover;
  position: relative;
}

.header-histoire {
  background-image: url(<?php echo $bg_histoire; ?>);
}

.header-plan {
  background-image: url(<?php echo $train; ?>);
}

a {
  text-decoration: none;
  color: #f4f4f4;
}

p {
  color: #f4f4f4;
}

/* Menu de navigation  */

.header-accueil {
  position: relative;
  margin-bottom: 10rem;
}

.header-accueil .nav-bar {
  position: relative;
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1000;
}

.header-accueil .nav-bar .choix-langues {
  position: absolute;
  top: 50%;
  right: 0;
  transform: translateY(-50%);
  display: flex;
  gap: 20px;
  margin-right: 20px;
}

.header-accueil .nav-bar .choix-langues img {
  width: 50px;
}

.header-accueil .nav-bar ul {
  background-color: #505050;
  display: flex;
  flex-direction: row;
  align-items: start;
  gap: 20px;
}

.header-accueil .nav-bar a,
li {
  list-style: none;
  font-size: 22px;
  color: #f4f4f4;
  transition: 0.3s all;
  position: relative;
}

.header-accueil .nav-bar li {
  padding: 20px;
}

.header-accueil .nav-bar .connect{
  margin-top: 0.5rem;
  padding: 1rem;
  color: white;
  font-size: 1rem;
  background-color: #b94503;
  border-style: none;
  border-radius: 10px;
}

.header-accueil .nav-bar li:hover a {
  color: #f7af3e;
  transition: 0.3s all;
}

.header-accueil .nav-bar li::after {
  content: "";
  position: absolute;
  background-color: #f7af3e;
  height: 3px;
  border-radius: 10px;
  width: 0%;
  left: 50%;
  transform: translateX(-50%);
  bottom: 0;
  transition: 0.3s;
}

.header-accueil .nav-bar li:hover::after {
  width: 100%;
}

.header-accueil .nav-bar .menu-icon {
  display: none;
}

/* Fichier CSS: style.css */

/* Fichier CSS: style.css */

.body-connexion {
  font-family: Arial, sans-serif;
  background-color: #505050;
  margin: 0;
  padding: 0;
}

.container-connexion {
  width: 300px;
  margin: 100px auto;
  padding: 20px;
  background-color: white;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.container-connexion h1 {
  color: #505050;
  font-size: 2.5rem;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
  text-align: left;

}

.container-connexion label {
  display: block;
  color: #505050;
  margin-bottom: 5px;
}

.container-connexion input[type="text"],
.container-connexion input[type="password"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.container-connexion input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #f7af3e;
  border: none;
  border-radius: 4px;
  color: white;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.container-connexion input[type="submit"]:hover {
  background-color: #e09a34;
}


/* Le titre principal de la page */

.header-accueil .titre-principal {
  position: absolute;
  font-size: 9rem;
  color: #f4f4f4;
  text-shadow: 0px 0px 20px #333;
  top: 55%;
  left: 35%;
  transform: translate(-50%, -50%);
  animation: animation 1s ease-in-out;
  padding: 0 40px;
}

/* Pour mettre les bordures du titre */
.header-accueil .titre-principal::before {
  content: "";
  width: 100%;
  height: 5px;
  background-color: #f4f4f4;
  position: absolute;
  top: -30px;
  left: 0;
  border-radius: 50px;
  box-shadow: 0px 0px 15px #333;
}

.header-accueil .titre-principal::after {
  content: "";
  width: 100%;
  height: 5px;
  background-color: #f4f4f4;
  position: absolute;
  bottom: -30px;
  left: 0;
  border-radius: 50px;
  box-shadow: 0px 0px 15px #333;
}

/* Section Francois 1er */

.section-francois {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  margin: 50px;
}

.section-francois .partie-gauche {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.section-francois .partie-gauche h2 {
  align-self: center;
  font-size: 3rem;
  color: #ea5c0d;
}

.section-francois p {
  font-family: "Cicle Fina";
  font-size: 30px;
}

.section-francois .partie-gauche a {
  align-self: flex-start;
}

.section-francois img {
  margin-left: 50px;
}

.ensavoir {
  width: 20rem;
  height: 4rem;
  background-color: rgb(234, 91, 12);
  color: white;
  align-content: center;
  position: relative;
  margin: 5% 10%;
  transition: 0.3s all;
}

.ensavoir:hover {
  cursor: pointer;
  transition: 0.3s all;
}

.fa-arrow-right {
  transition: 0.2s all;
}

.ensavoir:hover .fa-arrow-right {
  cursor: pointer;
  transition: 0.2s all;
  transform: translateX(10px);
}

.ensavoir p {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 20px;
}

.portrait {
  width: 40rem;
  margin-right: 3rem;
}

.centre_intrigue {
  margin: 10% 0;
}

.centre_intrigue h2 {
  color: #f4f4f4;
  text-align: center;
  font-size: 3rem;
  margin: 10%;
}

.centre_intrigue .elements_intrigue {
  display: flex;
  justify-content: space-around;
}

.centre_intrigue .elements_intrigue p {
  background-color: #333;
  color: #f7af3e;
  text-align: center;
  font-size: 36px;
  padding: 15px;
  border-radius: 5px;
}

.centre_intrigue .elements_intrigue .residence_royale,
.histoire_fontaibleau {
  position: relative;
}

.centre_intrigue .elements_intrigue .residence_royale p {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  right: -50%;
}

.centre_intrigue .elements_intrigue .histoire_fontaibleau p {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: -10%;
}

.foret {
  margin: 5% 0;
  background-image: url(<?php echo $parc_img; ?>);
  background-size: cover;
  height: 90vh;
  background-position: 50%;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  margin-bottom: 0;
}

.foret h1 {
  font-size: 10rem;
  color: #f4f4f4;
  margin-top: 5%;
  margin-left: 5%;
  text-shadow: 2px 2px 20px #333;
}

.horaire {
  color: white;
  font-family: "Cicle Semi";
}

.footer {
  position: relative;
  background: #505050;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.social-icon,
.menu {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 10px 0;
  gap: 20px;
}

.social-icon__item,
.menu__item {
  list-style: none;
}

.social-icon__link {
  font-size: 2rem;
  color: #fff;
  display: inline-block;
  transition: 0.5s;
}

.social-icon__link:hover {
  color: #f7af3e;
}

.menu__link {
  font-size: 1.2rem;
  color: #fff;
  display: inline-block;
  transition: 0.5s;
  text-decoration: none;
  opacity: 0.75;
  font-weight: 300;
}

.menu__link:hover {
  opacity: 1;
  color: #f7af3e;
}

.footer p {
  color: #fff;
  font-size: 1rem;
  font-weight: 300;
}

.footer .logos {
  width: 100%;
  display: flex;
  justify-content: center;
  margin-top: 2rem;
  gap: 50px;
}

@keyframes animate {
  0% {
    background-position-x: -1000rem;
  }

  100% {
    background-positon-x: 0rem;
  }
}

/* Style de la page Histoire */

.frise {
  position: relative;
  max-width: 1200px;
  margin: 100px auto;
}

.frise .conteneur {
  padding: 50px;
  position: relative;
  width: 50%;
}

.frise .conteneur .texte {
  padding: 20px 30px;
  background-color: #505050;
  position: relative;
  border-radius: 6px;
  font-family: "Cicle Semi";
}

.frise .conteneur .texte h2 {
  font-weight: 600;
  margin-bottom: 2px;
  font-size: 2rem;
  font-family: "Dyno Bold";
  color: #f7af3e;
}

.frise .conteneur .texte small {
  display: inline-block;
  margin-bottom: 20px;
  margin-top: 3px;
  font-size: 1.7rem;
  font-family: "Dyno Italic";
  color: #ea5c0d;
}

.frise .conteneur .texte p {
  font-size: 1.4rem;
  font-family: "Cicle Gordita";
}

.frise .conteneur .texte img {
  width: 100%;
  margin-top: 2.5rem;
}

.frise .gauche {
  left: 0%;
}

.frise .droite {
  left: 50%;
}

.frise .conteneur .point-frise {
  position: absolute;
  font-size: 40px;
  right: -20px;
  top: 32px;
  z-index: 10;
}

.frise .droite .point-frise {
  left: -20px;
}

.frise::after {
  content: "";
  position: absolute;
  width: 6px;
  height: 100%;
  background-color: #b94503;
  top: 0;
  left: 50%;
  margin-left: -3px;
  z-index: -1;
}

.read_more {
  font-size: 1rem;
  text-decoration: underline;
}

.read_more:hover {
  cursor: pointer;
  color: #999;
  transition: 0.2s ease-out;
}

.horaires {
  font-size: 1rem;
  color: #fff;
  margin-top: 5%;
  margin-left: 1rem;
  margin-bottom: 5%;
}

.horaires h1 {
  font-size: 3rem;
  color: #f4f4f4;
  margin-top: 5%;
  margin-left: 2rem;
  margin-bottom: 3%;
  text-shadow: 2px 2px 20px #333;
}

.horaires h2 {
  color: #f7af3e;
  font-size: 2rem;
  margin-top: 3rem;
  margin-left: 2rem;
}

.logo_mcn {
  height: 5rem;
}

.logo_iut {
  height: 5rem;
  width: 5rem;
}

.logo_unesco {
  height: 5rem;
  width: 5rem;
}

/* Page Jardins */

.header-jardins {
  background-image: url(<?php echo $bg_jardin; ?>);
}

.conteneur-jardins {
  margin: 10rem 5rem;
  display: flex;
  gap: 40px;
}

.conteneur-jardins .element {
  width: 33%;
}

.conteneur-jardins .element img {
  width: 100%;
  height: 70%;
  margin-bottom: 1.8rem;
}

.conteneur-jardins .element h3 {
  margin-bottom: 0.8rem;
  font-size: 27px;
  color: #ea5c0d;
  text-align: center;
  background-color: #505050;
  font-family: "Dyno Italic";
  padding: 10px;
}

.conteneur-jardins .element p {
  font-size: 19px;
  font-family: "Cicle Fina";
}

.parc {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-bottom: 5rem;
}

.parc img {
  margin-bottom: 1.8rem;
}

.parc h3 {
  margin-bottom: 1.5rem;
  font-size: 27px;
  color: #ea5c0d;
  text-align: center;
  background-color: #505050;
  font-family: "Dyno Italic";
  padding: 10px 100px;
}

.parc p {
  width: 70%;
  font-size: 19px;
  font-family: "Cicle Fina";
}

.fin-jardins {
  display: flex;
  justify-content: space-around;
  margin-bottom: 10rem;
}

.fin-jardins .element {
  width: 30%;
}

.fin-jardins .element img {
  width: 100%;
  height: 70%;
  margin-bottom: 1.8rem;
}

.fin-jardins .element h3 {
  margin-bottom: 1.5rem;
  font-size: 27px;
  color: #ea5c0d;
  text-align: center;
  background-color: #505050;
  font-family: "Dyno Italic";
  padding: 10px;
}

.fin-jardins .element p {
  font-size: 19px;
  font-family: "Cicle Fina";
}

/* Style de la page architecture */
.header-architecture {
  background-image: url(<?php echo $bg_architecture; ?>);
  width: 100%;
}

.conteneur-architecture {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 7rem;
}

.conteneur-architecture .composant-architecture {
  position: relative;
}



.conteneur-architecture .composant-architecture p {
  position: absolute;
  bottom: 0;
  margin: 0;
  width: 100%;
  padding: 0 2rem;
  font-size: 1.2rem;
  background-color: rgba(0, 0, 0, 0.6);
  height: 0%;
  letter-spacing: 1.8px;
  cursor: default;
  overflow: hidden;
  transition: 0.5s ease;
}

.merveille {
  font-size: 5rem;
}

.conteneur-architecture .composant-architecture img {
  width: 80%;
}

.conteneur-architecture .composant-architecture:hover p {
  height: 100%;
  width: 80%;
  transition: 0.5s ease;
}

/* Style de la page Architecture */
h1 {
  text-align: center;
  color: #f4f4f4;
  font-size: 4rem;
}

.composant-architecture {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 100px 0px 0px 0px;
  flex-direction: column;
}

.composant-architecture p {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 10px 200px 50px 200px;
  flex-direction: column;
}
/* Style de la page plan */

.composant-cartes {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0px 0px 50px 0px;
  gap: 80px;
}

.composant-cartes .carte {
  display: flex;
  gap: 35px;
  flex-direction: column;
}

/* Style du site responsive */

@media screen and (max-width: 900px) {
  footer {
    width: 100%;
  }

  .header-accueil .titre-principal {
    font-size: 3rem;
    left: 50%;
    top: 50%;
  }

  .header-accueil .nav-bar {
    position: relative;
  }

  .header-accueil .nav-bar ul {
    display: none;
    flex-direction: column;
    align-items: center;
    position: absolute;
    top: 80px;
    left: 0;
    width: 100%;
    z-index: 999;
  }

  .header-accueil .nav-bar .choix-langues {
    gap: 10px;
    margin: 5px;
  }

  .header-accueil .nav-bar .choix-langues img {
    width: 35px;
  }

  .header-accueil .nav-bar ul.active {
    display: flex;
  }

  .header-accueil .nav-bar .menu-icon {
    display: block;
    width: 40px;
  }

  .merveille{
    font-size: 2rem;
  }

  .conteneur-architecture .composant-architecture:hover p {
    height: 100%;
    width: 80%;
    font-size: 0.8rem;
    transition: 0.5s ease;
  }

  .menu-icon .fa-bars {
    font-size: 40px;
    margin: 10px;
  }

  .section-francois img {
    display: none;
  }

  .section-francois .partie-gauche h2 {
    font-size: 2rem;
    padding-bottom: 20px;
  }

  .section-francois p {
    font-size: 16px;
  }

  .ensavoir {
    width: 15rem;
    height: 3rem;
    align-self: flex-start;
  }

  .ensavoir p {
    font-size: 14px;
  }

  .centre_intrigue .elements_intrigue {
    flex-direction: column;
    justify-content: center;
  }

  .centre_intrigue .elements_intrigue img {
    width: 100%;
  }

  .centre_intrigue .elements_intrigue p {
    background-color: rgba(0, 0, 0, 0.5);
  }

  .centre_intrigue .elements_intrigue .residence_royale p {
    position: absolute;
    top: 50%;
    left: 50%;
  }

  .centre_intrigue .elements_intrigue .histoire_fontaibleau p {
    position: absolute;
    top: 50%;
    left: 50%;
  }

  .foret {
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .foret h1 {
    font-size: 5rem;
    margin-bottom: 20px;
  }

  .horaires h1 {
    font-size: 1.2rem;
    text-align: start;
  }

  .horaires a h2 {
    font-size: 1.1rem;
  }

  .footer .logos {
    flex-direction: column;
    align-items: center;
    gap: 10px;
  }

  .frise {
    margin: 50px auto;
  }

  .frise::after {
    left: 31px;
  }

  .frise .conteneur {
    width: 100%;
    padding-left: 80px;
    padding-right: 25px;
  }

  .frise .conteneur .texte {
    padding: 15px;
  }

  .frise .conteneur .texte h2 {
    font-size: 20px;
  }

  .frise .conteneur .texte small {
    font-size: 17px;
  }

  .frise .conteneur .texte p {
    font-size: 16px;
  }

  .frise .conteneur .texte small {
    margin-bottom: 10px;
  }

  .frise .droite {
    left: 0;
  }

  .frise .conteneur .point-frise {
    left: 10px;
  }

  /* Style de la page responsive Jardins */

  .conteneur-jardins {
    flex-direction: column;
    width: 100%;
    margin: 5rem 0;
    align-items: center;
  }

  .conteneur-jardins .element {
    width: 80vw;
    margin-bottom: 3rem;
  }

  .parc {
    width: 100%;
    margin-bottom: 5rem;
  }

  .parc img {
    width: 100vw;
  }

  .parc p {
    font-size: 17px;
  }

  .fin-jardins {
    flex-direction: column;
    width: 100%;
    align-items: center;
    margin-bottom: 5rem;
  }

  .fin-jardins .element {
    width: 80vw;
    margin-bottom: 3rem;
  }

  .fin-jardins .element h3 {
    font-size: 22px;
  }

  .fin-jardins .element p {
    font-size: 17px;
  }
  .carousel {
    width: 100vw;
  }

  .composant-cartes .carte h1 {
    font-size: 2.2rem;
  }

  .composant-cartes .carte iframe {
    width: 300px;
    height: 300px;
    align-self: center;
  }

  .titre-principal {
    font-size: 2rem;
  }
}
