<?php 
require './controllers/abstractController.php';

 class VisitorController extends AbstractController{

    public function home(){
        $data=[
            'titre'=>"Accueil",     
            'view'=>"views/visitor/accueil.php",
        ];
        $this->genererPageAccueil($data);
    }

     public function creerCompte(){
        $data=[
            'titre'=>"S'inscrire",
            'view'=>"views/visitor/inscription.view.php",
        ];
        $this->genererPage($data);
    }

}
