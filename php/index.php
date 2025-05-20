<?php require_once("config/settings.php"); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=h, initial-scale=1.0" />
    <meta name="description" content="AB Créations - Accueil" />
    <title>AB créations - Accueil</title>
    <link rel="shortcut icon" href="<?php echo img_dir; ?>logoabcreation.png" />
    <link rel="stylesheet" href="<?php echo css_dir; ?>theme.css" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Oswald:wght@200..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body data-page="accueil">
    <div class="img-fond"></div>
    <header class="header">
        <div class="logo">
            <img src="<?php echo img_dir; ?>logoabcreation.png" alt="logo AB créations" height="50" width="50" />
        </div>

        <nav class="main-nav" role="navigation">
            <div class="main-nav__wrapper">
                <div class="main-nav_header">
                    <button class="closeMainNav">❌</button>
                </div>
                <div id="menu"></div>
                <div class="main-nav_footer">
                    <ul>
                        <li><a href="page-connexion.html" class="btn btn-login">Se connecter</a></li>
                        <li><a href="page-creationdecompte.html" class="btn btn-signup">S'inscrire</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <button class="openMainNav">☰</button>
    </header>
    <section>
        <div id="cont1" class="container container-A">
            <div class="AccueilTitle">
                <h1>Bienvenue sur AB Créations !</h1>
            </div>
            <p class="intro-text">
                <strong>AB Créations</strong>  est une vitrine en ligne dédiée aux œuvres d’art
                numérique réalisées sur
                tablette graphique.
                <br>
                <br>
                Ce site permet de découvrir des créations originales accompagnées d’informations sur
                le processus créatif et les techniques utilisées.
                <br>
                <br>
                Il intègre également des fonctionnalités interactives,
                comme un espace de commentaires et un formulaire de contact,
                <br>
                favorisant l’échange avec les visiteurs et
                la possibilité de commandes personnalisées.
            </p>
        </div>
        <!-- Conteneur de la galerie d'images -->
        <div class="image-gallery-container">
            <div class="titleGalerie">
                <h2>Galerie d'aperçus</h2>
            </div>
            <!-- Miniatures des images -->
            <div class="thumbnail-row">
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img1.jpg" alt="Image1"
                        onclick="currentSlide(1)">
                </div>
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img2.jpg" alt="Image2"
                        onclick="currentSlide(2)">
                </div>
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img3.jpg" alt="Image3"
                        onclick="currentSlide(3)">
                </div>
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img4.jpg" alt="Image4"
                        onclick="currentSlide(4)">
                </div>
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img5.jpg" alt="Image5"
                        onclick="currentSlide(5)">
                </div>
                <div class="thumbnail-column">
                    <img class="thumbnail demo cursor" src="<?php echo img_dir; ?>imgCreation/img6.jpg" alt="Image6"
                        onclick="currentSlide(6)">
                </div>
            </div>
            <a href="portfolio.html" class="btn-creation">Voir les créations</a>
        </div>
        <div class="row">
            <div id="cont2" class="container container-A">
                <div class="AContactTitle">
                    <h2>Vous souhaitez me contacter ?</h2>
                </div>
                <div class="AContactText">
                    <p>
                        Rendez-vous sur la page Contact grâce aux boutons ci-dessous. Je suis à l'écoute de toutes vos
                        demandes, questions ou projets.<br>
                        N'hésitez pas à me laisser un message, je reviendrai vers vous rapidement !
                    </p>
                    <a href="contact.html" type="button" id="btnContact" class="btn-RLN">Me contacter</a>
                </div>
            </div>

            <div id="cont3" class="container container-A">
                <div class="AN-TITLE">
                    <h2>📩 Ne manque rien de mon univers !</h2>
                </div>
                <div class="AN-TEXT">
                    <p>
                        Reçois mes dernières créations, les coulisses de mon travail et des exclusivités directement
                        dans ta
                        boîte mail.<br><br>
                        💡 Pas de spam, juste de l'inspiration !
                    </p>
                    <a href="a-propos.html#inscription-newsletter" type="button" class="btn-RLN btn2">
                        Rejoindre la newsletter
                    </a>
                </div>
            </div>
        </div>
    </section>
    <?php include ('templates/footer.php'); ?>

    <div class="layer"></div>
    <script async src="<?php echo js_dir; ?>theme.js"></script>
    <script src="../assets/scripts/btnRetourEnHaut.js"></script>
    <script src="../assets/scripts/galeriedapercu.js"></script>
</body>

</html>