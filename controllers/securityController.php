<?php 

class securityController{
    public static function isLog(){
        if(empty($_SESSION["utilisateur"])){
            return false;
        }else{
            return true;
        }
    }
}