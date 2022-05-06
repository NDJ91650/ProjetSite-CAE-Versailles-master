<?php
require "./models/dbConnect.class.php";
require "./models/user/user.class.php";
require "./models/user/userManager.class.php";




class UserController extends AbstractController{

    private $user;
    private $base;
    private $utilisateur;

    public function __construct(){
        $this->base=new Dbconnect();
        $this->user=new UserManager($this->base);
        $this->utilisateur=new User();
    }

    public function inscription(){

        $data=$this->checkData();
        var_dump($data);

        // Setter class User
        $this->utilisateur->setAcademie_origine($data["academie_origine"]);
        $this->utilisateur->setNumen($data["numen"]);
        $this->utilisateur->setCivilite_utilisateur($data["civilite_utilisateur"]);
        $this->utilisateur->setNom_utilisateur($data["nom_utilisateur"]);
        $this->utilisateur->setPrenom_utilisateur($data["prenom_utilisateur"]);
        $this->utilisateur->setDate_naissance_utilisateur($data["date_naissance_utilisateur"], date("Y-m-d H:i:s"));
        $this->utilisateur->setAdresse_utilisateur($data["adresse_utilisateur"]);
        $this->utilisateur->setCp_utilisateur($data["cp_utilisateur"]);
        $this->utilisateur->setVille_utilisateur($data["ville_utilisateur"]);
        $this->utilisateur->setNum_portable_utilisateur($data["num_portable_utilisateur"]);
        $this->utilisateur->setNum_domicile_utilisateur($data["num_domicile_utilisateur"]);
        $this->utilisateur->setEmail_utilisateur($data["email_utilisateur"]);
        $this->utilisateur->setDiscipline_contrat($data["discipline_contrat"]);
        $this->utilisateur->setNom_etbsmt_principal($data["nom_etbsmt_principal"]);
        $this->utilisateur->setRne_etbsmt($data["rne_etbsmt"]);
        $this->utilisateur->setAdresse_etbsmt($data["adresse_etbsmt"]);
        $this->utilisateur->setCp_etbsmt($data["cp_etbsmt"]);
        $this->utilisateur->setVille_etbsmt($data["ville_etbsmt"]);
        $this->utilisateur->setNum_etbsmt($data["num_etbsmt"]);
        $this->utilisateur->setAcademie_etbsmt($data["academie_etbsmt"]);

        $info=$this->user->verif($data["nom_utilisateur"]);
        var_dump($info);

        if($info){
            self::MessageAlerte("Erreur inscription", self::ROUGE);
            header("location: ".URL."accueil");
        } else{
           

            // function qui inscrit l'utilisateur sur la base de donnée
            $recup=$this->user->AjoutUtilisateur(

                // Setter class User
                $this->utilisateur->getAcademie_origine(), $this->utilisateur->getNumen(), $this->utilisateur->getCivilite_utilisateur(), $this->utilisateur->getNom_utilisateur(), $this->utilisateur->getPrenom_utilisateur(), $this->utilisateur->getDate_naissance_utilisateur(), $this->utilisateur->getAdresse_utilisateur(), $this->utilisateur->getCp_utilisateur(),$this->utilisateur->getVille_utilisateur(), $this->utilisateur->getNum_portable_utilisateur(), $this->utilisateur->getNum_domicile_utilisateur(), $this->utilisateur->getEmail_utilisateur(), $this->utilisateur->getDiscipline_contrat(), $this->utilisateur->getNom_etbsmt_principal(), $this->utilisateur->getRne_etbsmt(), $this->utilisateur->getAdresse_etbsmt(), $this->utilisateur->getCp_etbsmt(), $this->utilisateur->getVille_etbsmt(), $this->utilisateur->getNum_etbsmt(), $this->utilisateur->getAcademie_etbsmt()
            );
            header("location: ".URL."profile");
            // echo "Mon espace perso";
        }
    }

    public function compteValidation(){
        $data = $this->checkData();
        $this->utilisateur->setIdentifiant_utilisateur($data["identifiant_utilisateur"]);
        $this->utilisateur->setMdp_utilisateur($data["mdp_utilisateur"]);
        $connexion = $this->user->verificationMdp($this->utilisateur->getIdentifiant_utilisateur(), $this->utilisateur->getMdp_utilisateur());
        var_dump($data);
        var_dump($connexion);

        if ($connexion) {
            echo 'connexion reussi';
            // if ($this->user->validationCompte($this->utilisateur->getEmail_utilisateur())) {
            //     self::MessageAlerte("Connexion réussi", self::VERT);
            //     $_SESSION["utilisateur"] = [
            //         "email"=>$this->utilisateur->getEmail_utilisateur()
            //     ];
            //     header("location: " .URL."compte/profile");
            // } else {
            //     self::MessageAlerte("Attention compte non activé", self::ROUGE);
            //     // header("location: " .URL."creerCompte");
            // }
        } else {
            echo 'connexion echoué';
            self::MessageAlerte("Connexion échoué", self::ROUGE);
            // header("location: " .URL."creerCompte");
        }
    }

    public function deconnexion(){
        unset($_SESSION["utilisateur"]);
        self::MessageAlerte("Vous avez été déconnecté", self::VERT);
        header("location: ".URL."accueil");
    }

    public function profile(){
        // $donnee = $this->user->getInfosUser($_SESSION["utilisateur"]["mail"]);
        $data = [
            'titre' => "Mon profile",
            // 'tableau' => $donnee,
            'view' => "views/user/user.view.php",
        ];
        $this->genererPage($data);
    }
    
    public function demandeMutation(){
        $data=[
            'titre'=>"Demande de mutation",     
            'view'=>"views/user/fabform.php",
        ];
        $this->genererPageAccueil($data);
    }
}
