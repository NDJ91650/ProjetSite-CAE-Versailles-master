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
        $isValid=1;

        // Setter class User
        $this->utilisateur->setIsValid($isValid);
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
       

        $info=$this->user->verif($data["email_utilisateur"]);
        var_dump($info);

        if($info){
            self::MessageAlerte("Erreur inscription", self::ROUGE);
            header("location: ".URL."accueil");
        } else{
           

            // function qui inscrit l'utilisateur sur la base de donnée
            $recup=$this->user->AjoutUtilisateur(

                // Setter class User
                $this->utilisateur->getIsValid(), $this->utilisateur->getAcademie_origine(), $this->utilisateur->getNumen(), $this->utilisateur->getCivilite_utilisateur(), $this->utilisateur->getNom_utilisateur(), $this->utilisateur->getPrenom_utilisateur(), $this->utilisateur->getDate_naissance_utilisateur(), $this->utilisateur->getAdresse_utilisateur(), $this->utilisateur->getCp_utilisateur(),$this->utilisateur->getVille_utilisateur(), $this->utilisateur->getNum_portable_utilisateur(), $this->utilisateur->getNum_domicile_utilisateur(), $this->utilisateur->getEmail_utilisateur()
            );

            if($recup){

            }
            // header("location: ".URL."compte/profile");
        }
    }

    public function validation(){
        $data=$this->checkData();
        $this->utilisateur->setIdentifiant_utilisateur($data["identifiant_utilisateur"]);
        $this->utilisateur->setMdp_utilisateur($data["mdp_utilisateur"]);
        var_dump($data);

        $connexion=$this->user->verificationMdp($this->utilisateur->getIdentifiant_utilisateur(), $this->utilisateur->getMdp_utilisateur());
        var_dump($connexion);

        if ($connexion){
            if ($this->user->validationCompte($this->utilisateur->getIdentifiant_utilisateur())) {
                // self::MessageAlerte("Connexion réussi", self::VERT);
                $_SESSION["utilisateur"] = [
                    "identifiant_utilisateur"=>$this->utilisateur->getIdentifiant_utilisateur()
                ];
                header("location: " .URL."compte/profile");
            } else {
                self::MessageAlerte("Attention compte non activé", self::ROUGE);
                header("location: " .URL."creerCompte");
            }
        } else {
            self::MessageAlerte("Connexion échoué", self::ROUGE);
            header("location: " .URL."creerCompte");
        }
    }

    public function profile(){
        $donnee=$this->user->getInfosUser($_SESSION["utilisateur"]["identifiant_utilisateur"]);
        $data=[
            'titre'=>"Mon profile",
            'tableau'=>$donnee,
            'view'=>"views/user/user.view.php",
        ];
        $this->genererPage($data);
    }

    public function deconnexion(){
        unset($_SESSION["utilisateur"]);
        self::MessageAlerte("Vous avez été déconnecté", self::VERT);
        header("location: ".URL."accueil");
    }
    
    public function demandeMutation(){
        $data=[
            'titre'=>"Demande de mutation",     
            'view'=>"views/user/fabform.php",
        ];
        $this->genererPageAccueil($data);
    }

}
