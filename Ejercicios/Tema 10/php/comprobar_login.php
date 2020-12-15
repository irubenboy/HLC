<?php
session_start();
include('const.php');
function checkUsername(String $username, Array $users){
    foreach($users as $u){
        if(strtolower($username) == strtolower($u['username'])){
            return true;
        }
    }
    return false;
}

function checkPwd(String $pwd, Array $users){
    foreach($users as $u){
        if($pwd == $u['pwd']){
            return true;
        }
    }
    return false;
}
$errors = [];
if(isset($_POST['ingresar'])){
    if(isset($_POST['username']) && isset($_POST['pwd'])){
        $username = $_POST['username'];
        $pwd = $_POST['pwd'];

        if(!empty($username) && !empty($pwd)){
            if(checkUsername($username, $users)){
                if(checkPwd($pwd, $users)){
                    $_SESSION['username'] = $username;
                    header('location: bienvenido.php');
                } else {
                    header('location: ../index.php?err=ERRNO_3');
                }
            } else {
                header('location: ../index.php?err=ERRNO_2');
            }
        } else {
            header('location: ../index.php?err=ERRNO_1');
        }
    }
}


?>