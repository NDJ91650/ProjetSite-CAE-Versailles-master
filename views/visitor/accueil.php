<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/accueil.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <title><?= $titre ?></title>
</head>


<body>

  <!-- nav bar -->
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #099AD8">
      <div id="menu" class="navbar-nav mr-auto">
        <?php
        if (empty($_SESSION["utilisateur"])) :
        ?>
          <a class="menu" data-toggle="modal" data-target="#modal_connexion">Connexion</a>

          <!-- Modal -->
          <div class="modal fade" id="modal_connexion" tabindex="0" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="<?= URL ?>compteValidation" method="POST" enctype='multipart/form-data'>
                    <div class="form-group">
                      <label for="identifiant_utilisateur">Identifiant :</label>
                      <input type="text" name="identifiant_utilisateur" class="form-control" id="identifiant_utilisateur">

                    </div>
                    <div class="form-group">
                      <label for="mdp_utilisateur">Mot de passe :</label>
                      <input type="password" name="mdp_utilisateur" class="form-control" id="mdp_utilisateur">
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>
              </div>
            </div>
          </div>

          <a class="menu" href="<?= URL ?>profile">S'inscrire</a>
        <?php else : ?>
          <a class="menu" href="<?php URL ?>compte/profile">Mon compte</a>
          <a class="menu" href="<?php URL ?>compte/deconnexion">Déconnexion</a>
        <?php endif; ?>
      </div>
    </nav>
  </header>

  <div id="head">
    <!-- Logo -->
    <div>
      <figure>
        <img id="logo" src="./public/img/logo/logo_CAEVersailles.jpg" alt="Logo Académie Versailles">
      </figure>
    </div>

    <!-- Carroussel -->
    <div id="caroussel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#caroussel" data-slide-to="0" class="active"></li>
        <li data-target="#caroussel" data-slide-to="1"></li>
        <li data-target="#caroussel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./public/img/carroussel/Webp.net-resizeimage (1).jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./public/img/carroussel/img-academie.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="./public/img/carroussel/img-book.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-target="#caroussel" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-target="#caroussel" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>


  <!-- Contenu page -->

  <div id="contenu">

    <div class="mvt-maitres">
      <br>
      <div id="quisommesnous">
        <hr>
        <h3>Mouvement des maîtres du 2nd degré </h3>
        <hr>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, assumenda. Temporibus dolor, fuga voluptatibus dicta ipsa tempore ullam maxime et, impedit praesentium, unde molestiae? Pariatur quae fugit rerum minima dicta. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet perspiciatis vel, molestias provident mollitia nemo deserunt repudiandae autem quos impedit, maiores cum libero officia expedita dolor in vero eligendi? Culpa? Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quis fugit voluptatem provident cumque cupiditate eos unde natus, assumenda quaerat ex quia! Quo recusandae explicabo commodi repudiandae nostrum! Ipsum, veniam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit beatae ratione harum nisi, molestiae nihil, veniam enim ea ullam sequi recusandae amet aliquid voluptas dignissimos. Natus quis tempora esse sed? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Qui consectetur accusantium, voluptatum impedit neque quibusdam facilis nihil voluptate optio iste dolores, exercitationem quis ipsa explicabo provident! Voluptatem libero optio soluta.</p>
      </div>
      <br>
      <br>

      <div class="container">

        <!-- Accordeon -->
        <div class="accordion" id="accordeon">

          <!-- Rubrique S'informer -->
          <div class="card" id="card-sinformer">
            <div class="card-header" id="headingOne">
              <h2 class="col-xxl-12">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <p class="titre-menu">S'informer</p>
                </button>
              </h2>
            </div>

            <!-- Contenu "S'informer" : Texte réglementaire -->
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordeon">
              <div class="card-body">

                <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">

                  <div class="btn-group" role="group" id="opt-txt-reglementaire">
                    <button type="button" class="btn btn-outline-info dropdown-toggle" id="style-btn-sinformer" data-toggle="dropdown" aria-expanded="false">
                      Texte réglementaire
                    </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="./public/doc-rubrique/rubrique-texte-reglementaire/texte-reglementaires/2016_modalites_applications_cne2.pdf" target="_blank">Modalités 2016</a>
                      <a class="dropdown-item" href="./public/doc-rubrique/rubrique-texte-reglementaire/texte-reglementaires/accordEmploi2nd.pdf" target="_blank">Accord emploi</a>
                      <a class="dropdown-item" href="./public/doc-rubrique/rubrique-texte-reglementaire/texte-reglementaires/circulaire 2005.pdf" target="_blank">Circulaire 2005</a>
                      <a class="dropdown-item" href="./public/doc-rubrique/rubrique-texte-reglementaire/texte-reglementaires/Circulaire 2007-078 Mvt des maîtres.pdf" target="_blank">Circulaire 2007 mouvement des maîtres</a>
                    </div>
                  </div>
                  <br>

                  <button type="button" class="btn btn-outline-info" id="style-btn-sinformer">Accord Collégial</button>
                  <br>
                  <button type="button" class="btn btn-outline-info" id="style-btn-sinformer">Calendrier du mouvement des maîtres</button>
                  <br>
                  <button type="button" class="btn btn-outline-info" id="style-btn-sinformer">Liste des établissements de l'académie</button>
                  <br>
                  <button type="button" class="btn btn-outline-info" id="style-btn-sinformer">Liste des académie</button>
                  <br>
                  <button type="button" class="btn btn-outline-info" id="style-btn-sinformer">Membre de la CAE</button>
                  <br>

                </div>


              </div>
            </div>
          </div>

          <!-- Rubrique S'inscrire -->
          <div class="card" id="card-sinscrire">
            <div class="card-header" id="headingTwo">
              <h2 class="col-xxl-12">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <p class="titre-menu">Je candidate au mouvement</p>
                </button>
              </h2>
            </div>


            <!-- Contenu rubrique "S'inscrire" -->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordeon">
              <div class="card-body" id="card">
                <div id="info-inscription">
                  <!-- Information formulaire inscription -->
                  <p>
                    Avant de vous inscrire, veuillez vous munir des pièces justificatives suivantes :
                    <br> 1.Numen - 2.Contrat provisoire/définif - 3.Discipline du contrat - 4.Copie du contrat
                  </p>
                  <a class="btn btn-primary" href="<?= URL ?>creerCompte">S'inscrire</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="actu container">
      <h1>Actualités</h1>

      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    </div>

  </div>


  <!-- Nos Partenaires -->
  <!-- <div class="partenaire text-center">
    <figure m-5>
      <figcaption>Nos partenaires</figcaption>
      <img src="./public/img/logo-partenaires/logocompany.jpg" alt="Logo Company">
      <img src="./public/img/logo-partenaires/logocompany.jpg" alt="Logo Company">
      <img src="./public/img/logo-partenaires/logocompany.jpg" alt="Logo Company">
      <img src="./public/img/logo-partenaires/logocompany.jpg" alt="Logo Company">
      <img src="./public/img/logo-partenaires/logocompany.jpg" alt="Logo Company">
    </figure>
  </div> -->

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
  <footer class="container">
    <p class="float-right"><a href="#">Haut de page</a></p>
    <p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
  </script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>