<?php

class Administrateur {
    
    private static $username = "Administrateur";
    private static $password = "123123";


    public static function checkConnexion(){
        if(!isset($_POST[User::$usernameField]) || !isset($_POST[User::$passwordField])){
            return false;
        }
        
        if($_POST[User::$usernameField] != self::$username || $_POST[User::$passwordField] != self::$password){
            return false;
        }
        
        return true;
    }
}