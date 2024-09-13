<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Portfolio de Coulon Alexandre</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../menu.css">

</head>

<body>
  <header>
   <?php require 'menu.html' ?>
</header>
  <br>
  <div class="slider">
    <section class="carousel" aria-label="Gallery">
      <ol class="carousel__viewport">
        <li id="carousel__slide1"
            tabindex="0"
            class="carousel__slide">
          <div class="carousel__snapper">
            <a href="#carousel__slide4"
               class="carousel__prev">Go to last slide</a>
            <a href="#carousel__slide2"
               class="carousel__next">Go to next slide</a>
            <br>
            <h2>Qui je suis </h2>
            <br>
            
            <p></p>Je m’appelle Coulon Alexandre, j’ai 20 ans, et je suis passionné par l’informatique.
            Très curieux de nature et logique, je suis attiré de longue date par l’informatique.
            Je suis dynamique, sérieux et méthodique dans tous les domaines qui me passionnent et ma
            curiosité m’amène sans cesse à repousser mes limites pour progresser.</p>
          </div>
        </li>
        <li id="carousel__slide2"
            tabindex="0"
            class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide1"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide3"
             class="carousel__next">Go to next slide</a>
          <h2>Mes objectifs professionnels</h2>
          <br>
          <br>
          <p>            Je souhaite intégrer la licence professionnelle CDAISI (Cyber Défense, Anti-Intrusion des
          Systèmes d’Information) dès la rentrée universitaire 2021 après l’obtention de mon BTS SIO.
          En effet, mes stages en milieu professionnel m’ont fait prendre conscience que la priorité
          actuelle des entreprises est la volonté de sécuriser leurs réseaux informatiques pour
          garantir la confidentialité des données et le bon fonctionnement des systèmes.</p>
        </li>
        <li id="carousel__slide3"
            tabindex="0"
            class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide2"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide4"
             class="carousel__next">Go to next slide</a>
          <h2>Langages</h2>
            <ul>
              <li>
                <img src="../img/html.png">
                HTML</li>
              <li>
                <img src="../img/css.png">CSS</li>
              <li>
                <img src="../img/js.png">javascript</li>
              <li>
                <img src="../img/sql.png">
              SQL</li>
              <li>
                <img src="../img/php.png">
                PHP</li>
            </ul>
  
        </li>
        <li id="carousel__slide4"
            tabindex="0"
            class="carousel__slide">
          <div class="carousel__snapper"></div>
          <a href="#carousel__slide3"
             class="carousel__prev">Go to previous slide</a>
          <a href="#carousel__slide1"
             class="carousel__next">Go to first slide</a>
          <h2>Framework et outils maitrisés</h2>
            <ul>
              <li>PHPMyAdmin</li>
              <li>PHPstorm</li>
              <li>VS code</li>
              <li>repl.it</li>
            </ul>
          
        </li>
      </ol>
      <aside class="carousel__navigation">
        <ol class="carousel__navigation-list">
          <li class="carousel__navigation-item">
            <a href="#carousel__slide1"
               class="carousel__navigation-button">Go to slide 1</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide2"
               class="carousel__navigation-button">Go to slide 2</a>
          </li>
          <li class="carousel__navigation-item">
            <a href="#carousel__slide3"
               class="carousel__navigation-button">Go to slide 3</a>
          </li>       
          
          <li class="carousel__navigation-item">
            <a href="#carousel__slide4"
               class="carousel__navigation-button">Go to slide 4</a>
          </li>
        </ol>
      </aside>
    </section>
  </div>
  <h2>Mon CV et ma lettre de motivation</h2>
  <a href="../img/Coulon_Alexandre.pdf" target="_blank">voir mon CV</a>
  <a href="../img/lettre_motivation_coulon_alexandre.pdf" target="_blank">voir ma lettre de motivation</a>
</body>
  
  