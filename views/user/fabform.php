<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <title>Test Formulaire</title>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">DEMANDE DE MUTATION INTER ACADEMIQUE (VERS VERSAILLES)</h1>
            <p class="lead">COMMISSION ACADÉMIQUE DE L'EMPLOI DE VERSAILLES</p>
            <hr class="my-4">
            <p>Secrétaire académique : Madame Albane de Laage (a.delaage@ddec78.fr) 01 30 83 05 03</p>
            <p>15 rue du Maréchal Joffre 78000 VERSAILLES</p>
        </div>

        <form action="" method="post">
            <div class="page" id="page1">
                <h2>I. IDENTITÉ DU DEMANDEUR</h2>
                <p>(Il s'agit de vos données personnelles. Celles-ci seront uniquement utilisées dans le cadre du mouvement des maîtres)</p>
                <br>
                <div class="form-group">
                    <label for="type demande">1. Type de demande pour la rentrée 2022 :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Demande de mutation dans l’académie de Versailles
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Demande de 1er emploi en contrat définitif dans l’académie
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                        <label class="form-check-label" for="exampleRadios3">
                            Demande de réintégration dans l'académie après une période de disponibilité ou congé
                        </label>
                    </div>
                </div>
                <br>

                <label for="type demande">2. Académie d'origine :</label>
                <div class="form-group">
                    <select class="custom-select">
                        <option selected>Selectionner votre réponse</option>
                        <option value="1">AIX-MARSEILLE</option>
                        <option value="2">AMIENS</option>
                        <option value="3">BESANCON</option>
                        <option value="4">BORDEAUX</option>
                        <option value="5">CAEN</option>
                        <option value="6">CLERMONT-FERRAND</option>
                        <option value="7">CORSE</option>
                        <option value="8">DIJON</option>
                        <option value="9">GRENOBLE</option>
                        <option value="10">CRETEIL</option>
                        <option value="11">PARIS</option>
                        <option value="12">LILLE</option>
                        <option value="13">LIMOGES</option>
                        <option value="14">LYON</option>
                        <option value="15">MONTPELLIER</option>
                        <option value="16">NANCY-METZ</option>
                        <option value="17">NANTES</option>
                        <option value="18">NICE</option>
                        <option value="19">ORLEANS-TOURS</option>
                        <option value="20">POITIERS</option>
                        <option value="21">REIMS</option>
                        <option value="22">RENNES</option>
                        <option value="23">ROUEN</option>
                        <option value="24">STRASBOURG</option>
                        <option value="25">TOULOUSE</option>
                        <option value="26">GUYANE</option>
                        <option value="27">GUADELOUPE</option>
                        <option value="28">MARTINIQUE</option>
                        <option value="29">REUNION</option>
                        <option value="30">ST PIERRE ET MIQUELON</option>
                        <option value="31">NOUVELLE CALEDONIE</option>
                        <option value="32">POLYNESIE FRANCAISE</option>
                        <option value="33">WALLIS ET FUTUNA</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="nom">3. Nom :</label>
                    <input type="text" class="form-control" id="nom" placeholder="Saisir votre nom">
                </div>
                <br>
                <div class="form-group">
                    <label for="prenom">4. Prénom :</label>
                    <input type="text" class="form-control" id="prenom" placeholder="Saisir votre Prénom">
                </div>
                <br>
                <div class="form-group">
                    <label for="nom jeune fille">5. Nom de jeune fille :</label>
                    <input type="text" class="form-control" id="nomdob" placeholder="Saisir votre nom de jeune fille">
                </div>
                <br>
                <div class="form-group">
                    <label for="date de naissance">6. Date de naissance :</label>
                    <input type="date" class="form-control" id="dob">
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse">7. Adresse de votre domicile actuel :</label>
                    <input type="text" class="form-control" id="adresse" placeholder="Ex: 2 rue du palais 75000 PARIS">
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse">8. Numéro de téléphone :</label>
                    <p> (Il est impératif de pouvoir vous joindre par téléphone lors des opérations du mouvement des maîtres)</p>
                    <input type="tel" class="form-control" id="num" placeholder="Saisir votre numéro de téléphone">
                </div>
                <br>
                <div class="form-group">
                    <label for="adresse">9. Adresse électronique :</label>
                    <p> (Attention !! cette adresse doit être correcte sans quoi vous devrez remplir à nouveau ce formulaire)</p>
                    <input type="email" class="form-control" id="email" placeholder="Saisir votre adresse email">
                </div>
                <br>
                <div class="form-group">
                    <label for="discipline">10. Discipline de contrat :</label>
                    <input type="text" class="form-control" id="discipline" placeholder="Saisir votre discipline">
                </div>
                <br>
                <div class="form-group">
                    <label for="option discipline">11. Option de la discipline de contrat (le cas échéant) :</label>
                    <input type="text" class="form-control" id="optiondiscipline">
                </div>
                <br>
                <div class="form-group">
                    <label for="numen">12. NUMEN : Il s'agit de votre Numéro d'identification de l’Éducation Nationale</label>
                    <p>(Il se trouve dans votre dossier administratif. Si vous ne le connaissez pas, vous pouvez le demander auprès du secrétariat administratif de votre établissement. Il se compose de 13 caractères, toujours en majuscules)</p>
                    <input type="text" class="form-control" id="numen" placeholder="Exemple (inventé): 46G9987654XYZ">
                </div>
                <br>
                <div class="form-group">
                    <label for="option discipline">13. Autre(s) discipline(s) pouvant être enseignée(s) :</label>
                    <input type="message" class="form-control" id="autrediscipline">
                </div>
                <br>
                <div class="form-group">
                    <label for="option discipline">14. Avez-vous obtenu le préaccord et/ou l'accord collégial ?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="oui" id="oui" value="oui">
                        <label class="form-check-label" for="oui">
                            Oui
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="non" id="non" value="non">
                        <label class="form-check-label" for="non">
                            Non
                        </label>
                    </div>
                </div>
                <br>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            <div class="page" id="page2">
                <h2>II. VOTRE SITUATION ADMINISTRATIVE</h2>
                <br>
                <div class="form-group">
                    <label for="type demande">15. Vous êtes :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Titulaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Stagiaire
                        </label>
                    </div>
                </div>
                <br>

                <div class="form-group">
                    <label for="date contrat definitif">16. *Indiquer la date de votre contrat definitif :</label>
                    <input type="date" class="form-control" id="contratdéfinitif">
                </div>
                <br>
                <div class="form-group">
                    <label for="date contrat provisoire">17. *Indiquer la date de votre contrat provisoire :</label>
                    <input type="date" class="form-control" id="contratprovisoire">
                </div>
                <br>
                <div class="form-group">
                    <label for="type demande">18. Etes-vous actuellement en :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="disponibilite" id="disponibilite" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Disponibilité
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="conge" id="conge" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Congé
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="aucun" id="aucun" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Aucun des deux
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="date initial disponibilite">19. *Indiquer la date initiale de votre disponibilité :</label>
                    <input type="date" class="form-control" id="debutdispo">
                </div>
                <br>
                <div class="form-group">
                    <label for="date initial conge">20. *Indiquer la date initiale de votre congé :</label>
                    <input type="date" class="form-control" id="debutconge">
                </div>
                <br>
                <div class="form-group">
                    <label for="date initial conge"> 21. Si vous êtes en congé, indiquez la nature de ce congé :</label>
                    <input type="text" class="form-control" id="debutconge">
                </div>
                <br>
                <div class="form-group">
                    <label for="echelle remuneration">22. *Echelle de rémunération :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="stagiaire" id="stagiaire" value="option1">
                        <label class="form-check-label" for="exampleRadios1">
                            Professeur stagiaire
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="certifgeneral" id="certifgeneral" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Certifié (enseignement général)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="certiftechnique" id="certiftechnique" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Certifié (lycée technique)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="certifpro" id="certifpro" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Certifié (lycée professionel)
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="certifeps" id="certifeps" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Certifié EPS
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="abrege" id="abrege" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Agrégé
                        </label>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="etablissementstage">23. *Nom de l'établissement dans lequel vous effectuez votre stage en 2022-2023 :</label>
                    <p>(Il s'agit de l'établissement dans lequel vous avez le plus d'heures d'enseignement)</p>
                    <input type="text" class="form-control" id="etablissementstage" placeholder="Ex. Notre Dame">
                </div>
                <br>
                <div class="form-group">
                    <label for="rnestage">24. *Indiquez le RNE de l'etablissement dans lequel vous effectuez votre stage en 2022-2023 :</label>
                    <!-- Buouton en savoir plus -->
                    <button type="button" data-toggle="modal" data-target="#Modal1">
                        ?
                    </button>

                    <!-- boite texte -->
                    <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Chaque établissement scolaire reconnu par l’éducation nationale (école, collège, lycée...) possède un code unique inscrit dans le répertoire national des établissements (RNE). On appelle ce code unique UAI pour Unité Administrative Immatriculée : il se compose de 7 chiffres et d’une lettre (exemple : 0950009E). Si vous ne le connaissez pas, vous pouvez demander ce code au secrétariat administratif de votre établissement ou consulter l'annuaire de l'éducation national à l'aide du lien ci-dessous. <a href="https://data.education.gouv.fr/explore/dataset/fr-en-annuaire-education/table/?disjunctive.nom_etablissement&disjunctive.type_etablissement&disjunctive.type_contrat_prive&disjunctive.code_type_contrat_prive&disjunctive.pial&disjunctive.appartenance_education_prioritaire" target="_blank">Annuaire de l'éducation national</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <input type="text" class="form-control" id="rnestage" placeholder="Ex. 0950809F">
                </div>
                <br>
                <div class="form-group">
                    <label for="adressestage">25. *Adresse complète de l'établissement dans lequel vous effectuez votre stage en 2022-2023 :</label>
                    <p>(Il s'agit de l'établissement dans lequel vous avez le plus d'heures d'enseignement)</p>
                    <input type="text" class="form-control" id="adressestage" placeholder="Ex. 15 rue du maréchal Joffre 78000 Versailles">
                </div>
                <br>
                <div class="form-group">
                    <label for="nometablissement">26. *Nom de l'établissement principal dans lequel vous exercez en 2022-2023 :</label>
                    <p>(Il s'agit de l'établissement dans lequel vous avez le plus d'heures d'enseignement)</p>
                    <input type="text" class="form-control" id="nometablissement" placeholder="Ex. Notre Dame">
                </div>
                <br>
                <div class="form-group">
                    <label for="rneprincipal">27. *Indiquez le RNE de votre établissement principal :</label>
                    <!-- Buouton en savoir plus -->
                    <button type="button" data-toggle="modal" data-target="#Modal2">
                        ?
                    </button>

                    <!-- boite texte -->
                    <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Chaque établissement scolaire reconnu par l’éducation nationale (école, collège, lycée...) possède un code unique inscrit dans le répertoire national des établissements (RNE). On appelle ce code unique UAI pour Unité Administrative Immatriculée : il se compose de 7 chiffres et d’une lettre (exemple : 0950009E). Si vous ne le connaissez pas, vous pouvez demander ce code au secrétariat administratif de votre établissement ou consulter l'annuaire de l'éducation national à l'aide du lien ci-dessous. <a href="https://data.education.gouv.fr/explore/dataset/fr-en-annuaire-education/table/?disjunctive.nom_etablissement&disjunctive.type_etablissement&disjunctive.type_contrat_prive&disjunctive.code_type_contrat_prive&disjunctive.pial&disjunctive.appartenance_education_prioritaire" target="_blank">Annuaire de l'éducation national</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>                        
                    <input type="text" class="form-control" id="rnestage" placeholder="Ex. 0950809F">
                </div>
                <br>
                <div class="form-group">
                    <label for="adresseetbsprincipal">28. *Adresse complète de votre établissement principal en 2022-2023 :</label>
                    <input type="text" class="form-control" id="adresseetbsprincipal" placeholder="Ex. 15 rue du maréchal Joffre 78000 Versailles">
                </div>
                <br>
                <div class="form-group">
                    <label for="nbhassure">29. *Indiquez le nombre total des heures d'enseignement assurées en 2022-2023 :</label>
                    <p>(Il ne peut être inférieur à un demi service)</p>
                    <input type="text" class="form-control" id="nbhassure" placeholder="Indiquez 15.5 pour 15h30.">
                </div>
                <br>
                <div class="form-group">
                    <label for="nbhassure"> 30. *Ancienneté de service d'enseignement, de direction ou de formation dans l'enseignement privé sous contrat et dans l'enseignement public :</label>
                    <p>(L'ancienneté est calculée au 1er septembre de l'année scolaire en cours)</p>
                    <input type="text" class="form-control" id="nbhassure" placeholder="Art. 5.5.2 de l'accord national du 12 mars 1987">
                </div>
                <br>
            </div>

            <div class="page" id="page3">
                <h2>III. MOTIF DE LA DEMANDE DE MUTATION</h2>
                <p>(Vous pouvez joindre à votre votre demande les justificatifs que vous jugez nécessaires. Ces justificatifs sont obligatoires pour les impératifs familiaux et raisons médicales)</p>
                <br>
                <div class="form-group">
                    <label for="echelle remuneration">31. Motif de la demande :</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="familiaux" id="familiaux" value="familiaux">
                        <label class="form-check-label" for="familiaux">
                            Impératifs familiaux
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="medicale" id="medicale" value="medicale">
                        <label class="form-check-label" for="medicale">
                            Raisons médicales
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="religieuse" id="religieuse" value="religieuse">
                        <label class="form-check-label" for="religieuse">
                            Vie religieuse
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="autre" id="autre" value="autre">
                        <label class="form-check-label" for="autre">
                            Autre
                        </label>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="autremotif"> 32. Si "Autre", vous avez la possibilité d'expliquer le motif :</label>
                        <input type="text" class="form-control" id="autremotif">
                    </div>
                    <br>
                    <div class="form-group">
                    <label for="Modal3">33. Pour que votre dossier soit bien pris en compte, vous devez impérativement télécharger dans le dossier numérique sécurisé les pièces justifiant qu’il s’agit d’un impératif familial.</label>
                    <!-- Buouton en savoir plus -->
                    <button type="button" data-toggle="modal" data-target="#Modal3">
                        ?
                    </button>

                    <!-- boite texte -->
                    <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        Ce dossier numérique sécurisé et personnalisé est accessible en cliquant sur le lien qui vous sera adressé par mail avec le récapitulatif de cette demande de mutation.
                                        <br>
                                        <p class="mb-0">L’envoi de ce mail se fait automatiquement une fois votre demande faite par ce formulaire en ligne.</p>
                                        <br>
                                        <p class="mb-0">La date limite de dépôt des pièces justificatives est fixée au 10 mars 2023</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="oui" id="oui" value="oui">
                        <label class="form-check-label" for="oui">
                            Oui
                        </label>
                    </div>                       
                </div>
                <br>
                     
                    
                    







            </div>



        </form>
    </div>

    


    

</body>
</html>