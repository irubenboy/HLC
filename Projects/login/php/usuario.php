<?php
    $usuario = "Rubén";
    $password = "login_hlc";

    function checkLogin(String $username, String $psswd){
        if(isValidateUsername($username) && isValidatePassword($psswd)){
            return true;
        }
        return false;
    }

    function isValidateUsername(String $username){
        global $usuario;
        if(strtolower($username) == strtolower($usuario)){
            return true;
        }
        return false;
    }

    function isValidatePassword(String $psswd){
        global $password;
        if(md5($psswd) == md5($password)){
            return true;
        }
        return false;
    }
?>