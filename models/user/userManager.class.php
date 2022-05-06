<?php 
require "./models/manager.class.php";

class UserManager extends Manager{
    
    public function AjoutUtilisateur(
        // User $utilisateur
        $academie_origine, $numen, $civilite_utilisateur, $nom_utilisateur, $prenom_utilisateur,$date_naissance_utilisateur,$adresse_utilisateur,$cp_utilisateur,$ville_utilisateur,$num_portable_utilisateur,
         $num_domicile_utilisateur ,$email_utilisateur,$discipline_contrat, $nom_etbsmt_principal , $rne_etbsmt, $adresse_etbsmt, $cp_etbsmt , $ville_etbsmt, $num_etbsmt, $academie_etbsmt   
        ){
        // // var_dump($this->getDb());
        $sql=$this->getDb()->prepare("
        INSERT INTO utilisateur 
        (academie_origine, numen, civilite_utilisateur, nom_utilisateur, prenom_utilisateur,date_naissance_utilisateur,adresse_utilisateur,cp_utilisateur ,ville_utilisateur,num_portable_utilisateur, num_domicile_utilisateur, email_utilisateur, discipline_contrat, nom_etbsmt_principal, rne_etbsmt, adresse_etbsmt, cp_etbsmt, ville_etbsmt, num_etbsmt, academie_etbsmt) 
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        // $param=[$utilisateur->getAcademie_origine(), $utilisateur->getNumen(), $utilisateur->getCivilite_utilisateur(), $utilisateur->getNom_utilisateur(), $utilisateur->getPrenom_utilisateur(), $utilisateur->getDate_naissance_utilisateur(), $utilisateur->getAdresse_utilisateur(), $utilisateur->getCp_utilisateur(), $utilisateur->getVille_utilisateur(), $utilisateur->getNum_portable_utilisateur(), $utilisateur->getNum_domicile_utilisateur(), $utilisateur->getEmail_utilisateur(), $utilisateur->getDiscipline_contrat(), $utilisateur->getNom_etbsmt_principal(), $utilisateur->getRne_etbsmt(), $utilisateur->getAdresse_etbsmt(), $utilisateur->getCp_etbsmt(), $utilisateur->getVille_etbsmt(), $utilisateur->getNum_etbsmt(), $utilisateur->getAcademie_etbsmt()];
        $param=[
            $academie_origine, $numen, $civilite_utilisateur, $nom_utilisateur, $prenom_utilisateur, $date_naissance_utilisateur, $adresse_utilisateur, $cp_utilisateur, $ville_utilisateur, $num_portable_utilisateur, $num_domicile_utilisateur, $email_utilisateur, $discipline_contrat, $nom_etbsmt_principal, $rne_etbsmt, $adresse_etbsmt, $cp_etbsmt, $ville_etbsmt,$num_etbsmt,$academie_etbsmt
        ];
        $sql->execute($param);
        if($sql->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }

    public function getPasswordUser($identifiant){
        // Recherche le mdp de la BDD en fonction de l'email
        $sql="SELECT mdp_utilisateur FROM utilisateur WHERE identifiant_utilisateur=?";
        $param=[$identifiant];
        $res=$this->getDb()->prepare($sql);
        $res->execute($param);
        $result=$res->fetch();
        return $result["mdp_utilisateur"];
    }

    public function verificationMdp($identifiant, $password){
        // Utiliser getPasswordUser pour aller chercher le mdp crypté en fonction de l'email
        // Utilisation de passwordverify pour vérifier les mdp

        $mdp=$this->getPasswordUser($identifiant);
        return password_verify($password, $mdp);
    }

    public function validationCompte($email){
        $sql="SELECT isValid FROM utilisateur WHERE email_utilisateur=?";
        $param=[$email];
        $res=$this->getDb()->prepare($sql);
        $res->execute($param); 
        $result=$res->fetch();
        return ($result["isValid"] == "0") ? false : true;
    }

    public function verif($email){
        $sql=$this->getDb()->prepare("SELECT email_utilisateur FROM utilisateur WHERE email_utilisateur=?");  
        $param=[$email];
        $sql->execute($param);
        $info=$sql->rowCount();
       
        if($info>0){
            return true;
        }else{
            return false;
        }
    }

    public function getInfosUser($mail){
        $sql="SELECT * FROM utilisateur WHERE email_utilisateur=?";
        $param=[$mail];
        $res=$this->getDb()->prepare($sql);
        $res->execute($param);
        $result=$res->fetch(PDO::FETCH_ASSOC);
        return $result;
        $res->closeCursor();
    }
}