<?php
    include('usuario.php');
    if(isset($_POST['username']) && isset($_POST['psswd']) && !empty($_POST['username']) && !empty($_POST['psswd'])){
        $username = $_POST['username'];
        $psswd = $_POST['psswd'];

        if(checkLogin($username, $psswd)){
            header('location: mipagina.php');
        } else {
            header('location: error.php');
        }
    } else {
        echo "Error";
    }
?>