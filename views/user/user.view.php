<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="public/css/user.view.css">


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <title><?= $titre ?></title>
</head>

<body>
    <!-- nav bar -->
    <nav id="nav-top" class="navbar navbar-expand-md navbar-dark fixed">

        <img src="./public/img/logo/logo_Versailles.jpg" class="" alt="logo-CAE">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">


            </ul>

            <div class="d-flex bd-highlight mb-3" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <?php
                    if (empty($_SESSION['utilisateur'])) :
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="">S'inscrire</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL ?>login">Connexion</a>
                        </li>


                    <?php else : ?>
                        <!-- <li class=""><a class="btn" href="<?= URL ?>account/profile">myProfile</a></li> Route code dans l'index -->
                        <!-- <li><a class="btn" href="<?= URL ?>account/logout">Se deconnecter</a></li> -->
                        <div class="d-flex bd-highlight mb-3">

                            <div class="ml-auto p-2 bd-highlight"><a class="btn" href="<?= URL ?>account/profile">Mon compte</a></div>
                            <div class="ml-auto p-2 bd-highlight"><a class="btn" href="<?= URL ?>account/logout">Se deconnecter</a></div>
                        </div>
                    <?php endif; ?>
                </ul>

            </div>
    </nav>
    </header>


    <div class="contenu">
        <!-- Head -->
        <div id="head">
            <h1>Bienvenue <?= $_SESSION['user']['mail'] ?> </h1>
            <div id="actu-utilisateur">
                <p>Actualité à faire</p>
            </div>
        </div>

        <div class="slide">
            <a id="btn-espacePerso" href="#">Espace personnel</a>
            <a type="button" id="btn-faireDemande" href="<?= URL ?>demandeMutation">Faire une demande</a>
        </div>

        <div id="contenu-espacePerso">
            <h2>A faire</h2>
        </div>

        <!-- Archive utilisateur -->
        <div class="slide">
            <a id="btn-archive" href="#">Demande en cours</a>
        </div>
        <div id="archive">
            <h2>A faire</h2>
        </div>

    </div>

    <!-- footer -->
    <div>
        <footer id="footer">
            <ul>
                <img src="./public/img/logo/logo_Versailles.jpg" alt="Logo Académie Versailles">
            </ul>
            <ul>
                <li>Nos engagement</li>
                <li>CGV</li>
                <li>Mentions légales</li>
                <li>Sitemap</li>
            </ul>
            <ul>
                <li>Qui somme-nous ?</li>
                <li>S'inscrire</li>
                <li>Nos partenaires</li>
                <li>F.A.Q</li>
            </ul>
            <ul>
                <li>Contacts</li>
                <pre>
15 rue du Maréchal Joffre
78000 VERSAILLES

Adresse mail : academie.versailles@gmail.com
Téléphone : 01-69-18-82-82
        </pre>
            </ul>
        </footer>
    </div>



    <!-- FOOTER -->
    <footer id="copy" class="container">
        <p class="float-right"><a href="#" style="text-decoration:none">Haut de page</a></p>
        <p>&copy; 2017-2021 Company, Inc. &middot;</p>
    </footer>


</body>

</html>