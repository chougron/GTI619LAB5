<?php

class CSRF {
    /**
     * The name of the field of the CSRF Token in the form
     * @var String
     */
    public static $fieldName = "csrf_token";
    
    /**
     * Create a CSRF Token and store it in the session
     * @return String The CSRF Token
     */
    public static function getToken(){
        $token = sha1(uniqid(rand(), TRUE));
        $_SESSION['csrf_token'] = $token;
        
        return $token;
    }
    
    /**
     * Check if the CSRF Token from the form is valid
     * @return boolean
     */
    public static function verifyToken(){
        if(!isset($_POST[self::$fieldName])){
            return false;
        }
        
        $token = $_POST[self::$fieldName];
        return $token == $_SESSION['csrf_token'];
    }
}