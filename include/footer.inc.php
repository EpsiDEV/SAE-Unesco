<?php
if (!function_exists('getImagePath')) {
    function getImagePath($title, $bdd) {
        $stmt = $bdd->prepare("SELECT path FROM images WHERE titre = :title");
        if ($stmt->execute(['title' => $title])) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result ? $result['path'] : '';
        } else {
            return '';
        }
    }
}

$mcn = getImagePath('logo_mcn_footer', $bdd);
$iut = getImagePath('logo_iut_footer', $bdd);
$unesco = getImagePath('unesco_footer', $bdd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fontainebleau</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<footer class="footer">
      <ul class="social-icon">
        <li class="social-icon__item">
          <a
            class="social-icon__link"
            href="https://www.facebook.com/chateaufontainebleau"
            target="_blank"
          >
            <i class="fa-brands fa-facebook"></i>
          </a>
        </li>
        <li class="social-icon__item">
          <a
            class="social-icon__link"
            href="https://www.linkedin.com/company/chateau-de-fontainebleau/"
            target="_blank"
          >
            <i class="fa-brands fab fa-linkedin-in"></i>
          </a>
        </li>
        <li class="social-icon__item">
          <a
            class="social-icon__link"
            href="https://www.instagram.com/chateaufontainebleau"
            target="_blank"
          >
            <i class="fa-brands fa-instagram"></i>
          </a>
        </li>
        <li class="social-icon__item">
          <a
            class="social-icon__link"
            href="https://www.youtube.com/channel/UCuHsrpyGJjGPixHWu7yrDSQ"
            target="_blank"
          >
            <i class="fa-brands fa-youtube"></i>
          </a>
        </li>
        <li class="social-icon__item">
          <a
            class="social-icon__link"
            href="https://www.pinterest.com/chfontainebleau"
            target="_blank"
          >
            <i class="fa-brands fa-pinterest"></i>
          </a>
        </li>
      </ul>
      <p>&copy;2023-2024 BUT Informatique</p>
      <section class="logos">
        <img class="logo_mcn" src="<?php echo $mcn; ?>" />
        <a href="https://iut.univ-gustave-eiffel.fr/" target="_blank"
          ><img class="logo_iut" src="<?php echo $iut; ?>"
        /></a>
        <a href="https://whc.unesco.org/fr/list/160" target="_blank"
          ><img class="logo_unesco" src="<?php echo $unesco; ?>"
        /></a>
      </section>
    </footer>
</body>
</html>