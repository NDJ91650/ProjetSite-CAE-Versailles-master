<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../public/css/user.view.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title><?= $titre ?></title>
</head>

<body>
    <header>
        <!-- nav bar -->
        <nav id="nav-top" class="navbar navbar-expand-md navbar-dark fixed">

            <img src="../public/img/logo/logo_Versailles.jpg" class="" alt="logo-CAE">
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
                            <div class="d-flex bd-highlight mb-3">
                                <div id="compte" class="ml-auto p-2 bd-highlight"><a class="btn" href="<?= URL ?>compte/profile">Mon compte</a></div>
                                <div id="deco" class="ml-auto p-2 bd-highlight"><a class="btn" href="<?= URL ?>compte/deconnexion">Se déconnecter</a></div>
                            </div>
                        <?php endif; ?>
                    </ul>

                </div>
        </nav>
    </header>

    <div class="contenu">
        <!-- Head -->
        <div id="head">
            <hr>
            <h3>Mouvement des maîtres du 2nd degré</h3>
            <hr>
            <div id="actu-utilisateur">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Titre actualité</h5>
                        <p class="card-text">Description acutalité : Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur nostrum architecto deleniti ipsam molestias animi saepe atque reprehenderit debitis maxime.</p>
                        <a href="#" class="btn btn-secondary">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>



        <div id="contenu-espacePerso">

            <div class="slide1">
                <!-- <a id="btn-espacePerso" href="#">Espace personnel</a> -->
                <div id="btn-faireDemande">
                    <a href="<?= URL ?>demandeMutation">Faire une demande de mutation</a>
                </div>
            </div>


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="info-perso" data-toggle="tab" href="#contenu-info-perso" role="tab" aria-controls="home" aria-selected="true">Info personnel</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="adresse" data-toggle="tab" href="#contenu-adresse" role="tab" aria-controls="profile" aria-selected="false">Adresse</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="etbsmt-principal" data-toggle="tab" href="#contenu-etbsmt-principal" role="tab" aria-controls="contact" aria-selected="false">Établissement principal</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="contenu-info-perso" role="tabpanel" aria-labelledby="info-perso">
                    <div class="info-perso">
                        <div class="icone">
                            <img src="../public/img/utilisateur/icone-utilisateur.png" class="" alt="Icone">
                            <p><?= $tableau["civilite_utilisateur"] ?> <?= $tableau["nom_utilisateur"] ?> <?= $tableau["prenom_utilisateur"] ?></p>
                            <p>Née le <?= $tableau["date_naissance_utilisateur"] ?></p>
                        </div>
                        <div class="info-utilisateur">
                            <p>Académie d'origine : <input type="text" placeholder="<?= $tableau["academie_origine"] ?>"></p>
                            <p>Numen : <input type="text" placeholder="<?= $tableau["numen"] ?>"></p>
                            <p>Adresse email : <input type="text" placeholder="<?= $tableau["email_utilisateur"] ?>"></p>
                            <p>Numéro de téléphone portable : <input type="text" placeholder="<?= $tableau["num_portable_utilisateur"] ?>"></p>
                            <p>Numéro de téléphone domicile : <input type="text" placeholder="<?= $tableau["num_domicile_utilisateur"] ?>"></p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contenu-adresse" role="tabpanel" aria-labelledby="adresse">
                    <div class="info-perso">
                        <div class="icone">
                            <img src="../public/img/utilisateur/icone-utilisateur.png" class="" alt="Icone">
                            <p><?= $tableau["civilite_utilisateur"] ?> <?= $tableau["nom_utilisateur"] ?> <?= $tableau["prenom_utilisateur"] ?></p>
                            <p>Née le <?= $tableau["date_naissance_utilisateur"] ?></p>
                        </div>
                        <div class="info-utilisateur">
                            <p>Adresse : <input type="text" placeholder="<?= $tableau["adresse_utilisateur"] ?>"></p>
                            <p>Code postale : <input type="text" placeholder="<?= $tableau["cp_utilisateur"] ?>"></p>
                            <p>Ville : <input type="text" placeholder="<?= $tableau["ville_utilisateur"] ?>"></p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contenu-etbsmt-principal" role="tabpanel" aria-labelledby="etbsmt-principal">
                    <div class="info-perso">
                        <div class="icone">
                            <img src="../public/img/utilisateur/icone-utilisateur.png" class="" alt="Icone">
                            <p><?= $tableau["civilite_utilisateur"] ?> <?= $tableau["nom_utilisateur"] ?> <?= $tableau["prenom_utilisateur"] ?></p>
                            <p>Née le <?= $tableau["date_naissance_utilisateur"] ?></p>
                        </div>
                        <div class="info-utilisateur">
                            <p>Discipline contrat : <input type="text" placeholder="<?= $tableau["discipline_contrat"] ?>"></p>
                            <p>Nom de l'établissement principal : <input type="text" placeholder="<?= $tableau["nom_etbsmt_principal"] ?>"></p>
                            <p>RNE de l'établissement principal : <input type="text" placeholder="<?= $tableau["rne_etbsmt"] ?>"></p>
                            <p>Adresse de l'établissement principal : <input type="text" placeholder="<?= $tableau["adresse_etbsmt"] ?>"></p>
                            <p>Code postal de l'établissement principal : <input type="text" placeholder="<?= $tableau["cp_etbsmt"] ?>"></p>
                            <p>Ville de l'établissement principal: <input type="text" placeholder="<?= $tableau["ville_etbsmt"] ?>"></p>
                            <p>Numéro de l'établissement principal: <input type="text" placeholder="<?= $tableau["num_etbsmt"] ?>"></p>
                            <p>Academie de l'établissement principal: <input type="text" placeholder="<?= $tableau["academie_etbsmt"] ?>"></p>
                        </div>
                    </div>
                </div>

            </div>

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
                <img src="../public/img/logo/logo_Versailles.jpg" alt="Logo Académie Versailles">
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
    <footer id="footer2">
        <p class="float-right"><a href="#">Haut de page</a></p>
        <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>


</body>

</html>