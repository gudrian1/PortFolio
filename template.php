<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />

    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">
    <link rel="stylesheet" href="style.css" />
    <!-- <link rel="stylesheet" href="css/style2.css"> -->

    <title>Mon portfolio</title>

    <!--<link href="./main.3f6952e4.css" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="minimal">
    <div id="site-border-left"></div>
    <div id="site-border-right"></div>
    <div id="site-border-top"></div>
    <div id="site-border-bottom"></div>
    <!-- Add your content of header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="accueil">Portfolio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="exp_pro">Expériences Professionelles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="parcourpro">Parcours Professionelles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="veilletechnologique">Veille technologique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="interet">Centre d'intérêt</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="formation">Formation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="hero-full-container background-image-container white-text-container" style="background-image: url('./assets/images/ordinateur.jpg')">

        <script type="text/javascript" src="./main.70a66962.js"></script>
    </div>
</body>
    
<!-- content -->
<?= $content; ?>
    
<footer class="footer-container text-center">
    <div class="f1">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h5>&copy; 2021 <a href=" https://ecoleiris.fr">Thibault Lepoivre</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</footer>

</html>
