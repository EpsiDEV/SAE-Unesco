<?php
header("Content-Type: text/css");
?>
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

.header-accueil {
  position: relative;
  margin-bottom: 7rem;
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
  text-decoration: none;
  font-size: 22px;
  color: #f4f4f4;
  transition: 0.3s all;
  position: relative;
}

.header-accueil .nav-bar li {
  padding: 20px;
}

.header-accueil .nav-bar li:hover a {
  color: #f7af3e;
  transition: 0.3s all;
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

/* Fin du style du header */

/* Style du titre */

.titre_principal {
  text-align: center;
  color: #f4f4f4;
  font-size: 5rem;
  word-spacing: 3px;
  padding: 30px 0;
  position: relative;
  margin-bottom: 5rem;
}

.titre_principal::before {
  content: "";
  background-color: #ea5c0d;
  width: 10%;
  height: 5px;
  position: absolute;
  bottom: 10px;
  border-radius: 5px;
}

/* Fin du style du titre */

/* Style de la présentation des personnes */

.team_presentation {
  display: flex;
  justify-content: space-around;
}

.team_presentation .person .person_details {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 15px;
}

.team_presentation .person img {
  max-width: 300px;
}

.team_presentation .person .person_details h2 {
  color: #f4f4f4;
  padding-top: 20px;
  font-size: 2.7rem;
  font-weight: 400;
}

.team_presentation .person .person_details h4 {
  color: #f4f4f4;
  font-size: 1.3rem;
  font-weight: 300;
}

.team_presentation .person .person_details .person_links {
  display: flex;
  gap: 30px;
  justify-content: center;
  align-items: center;
}

.team_presentation .person .person_details .person_links a {
  font-size: 2rem;
  color: #f4f4f4;
  cursor: pointer;
}

.team_presentation .person .person_details .person_links a:hover {
  color: #f7af3e;
}
/* Fin du style de la présentation des personnes */

/* Style des mentions */

.mentions {
  margin-top: 7rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 3rem;
}

.mentions h2 {
  font-size: 3.6rem;
  color: #f4f4f4;
}

.mentions .paragraphes {
  display: flex;
  flex-direction: column;
  gap: 1.8rem;
}

.mentions p {
  color: #f4f4f4;
  padding: 0 5rem;
  font-size: 1.3rem;
}

/* Fin du style des mentions */

/* Style du formulaire contact */

.contact {
  margin-top: 7rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 4rem;
}

.contact h2 {
  font-size: 3.6rem;
  color: #f4f4f4;
}

.contact form {
  display: flex;
  flex-direction: column;
  gap: 1.5rem;
  padding: 30px;
  box-shadow: 0px 0px 1px #f7af3e;
}

.contact form .entree {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.contact form .entree label {
  color: #f4f4f4;
  font-size: 1.5rem;
}

.contact form .entree input,
textarea {
  width: 100%;
  padding: 10px;
  font-size: 1.2rem;
  color: #333;
}

.contact form input::placeholder,
textarea::placeholder {
  font-style: italic;
  font-family: "Cicle Semi";
}

.contact form #submit {
  color: #f4f4f4;
  background-color: #ea5c0d;
  width: 50%;
  align-self: center;
  padding: 10px 5px;
  border: none;
  font-size: 1rem;
  border-radius: 40px;
  cursor: pointer;
}

/* Fin du style du forulaire de contact */

/* Style du message de fin */

.fin {
  text-align: center;
  font-size: 1.8rem;
  color: #f4f4f4;
  margin: 7rem 5rem;
  letter-spacing: 2px;
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
  transform: translateY(-5px);
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

/* Footer styling */
.footer {
  background: #505050;
  min-height: 100px;
  padding: 20px 50px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.footer p {
  color: #fff;
  font-size: 1rem;
  font-weight: 300;
  text-align: center;
}

.footer .logos {
  display: flex;
  justify-content: center;
  gap: 50px;
  margin-top: 2rem;
}

.logo_mcn, .logo_iut, .logo_unesco {
  max-width: 250px; 
  max-height: 100px; 
}

@keyframes animate {
  0% {
    background-position-x: -1000rem;
  }

  100% {
    background-positon-x: 0rem;
  }
}

@media screen and (max-width: 900px) {
  h2 {
    font-size: 1.8rem;
  }

  .team_presentation {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
  }

  .mentions {
    margin-top: 7rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 3rem;
  }

  .mentions h2 {
    font-size: 3.6rem;
    color: #f4f4f4;
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
    font-size: 2.2rem;
  }
}