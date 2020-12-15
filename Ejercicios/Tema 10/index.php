<?php
session_start();
// if(isset($_SESSION['username'])){
//     header('location: bienvenido.php');
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/form-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/error.css">
    <?php
    include_once('lib/functions.php');
    include_once('php/const.php');
    $num_intentos = 0;
    if(isset($_COOKIE['num_intentos'])){
        $num_intentos = $_COOKIE['num_intentos'];
        if($_COOKIE['num_intentos'] < 5 && isset($_GET['err'])){
            ++$num_intentos;
        }
    }

    $errors = [];
    if(isset($_GET['err'])){
        foreach($errors_const as $error => $text){
                if($_GET['err'] == $error){
                    $errors[0] = $text;
                }
        }
    }

    setcookie("num_intentos", $num_intentos, time() + (60*2));
    ?>
</head>
<body>
    <?php
    if(isset($_COOKIE['num_intentos']) && $_COOKIE['num_intentos'] >= 5){
    ?>
    <main>
        <div class="header">
            <h2 class="title">Has superado el límite de intentos. Debe esperar 2 minutos aproximadamente para volder a iniciar sesión</h2>
        </div>
    </main>
    <?php
    } else {
    ?>
    <main>
        <div class="header">
            <h2 class="title">Login</h2>
        </div>
        <div class="container-form">
            <form action="php/comprobar_login.php" method = "post">
                <div class="input-container">
                    <input class = "input" type="text" name = "username" placeholder = "Username">
                    <label for="username">Username</label>
                </div>
                <div class="input-container">
                    <input class = "input" type="password" name="pwd" placehodler = "Password">
                    <label for="pwd">Password</label>
                </div>

                <div class="submit">
                    <input type="submit" value="Ingresar" name = "ingresar">
                </div><br>
                <?= isset($_GET['err']) && $num_intentos > 0 ? "<center style = 'color: red'>Error!! Te quedan " . (5 - $num_intentos) . " intentos</center>" : "" ;?>
            </form>
        </div>
    </main>
    <?php
    $num_intentos > 0 ? print_errors($errors) : "";
    }
    ?>
</body>
</html>