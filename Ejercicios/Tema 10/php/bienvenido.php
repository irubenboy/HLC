<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenidx</title>
    <?php
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        $msg = "Bienvenidx $username";
        $a = "<a href='cerrar_sesion.php'>Salir</a>";
    } else {
        $msg = "Para poder acceder al contenido se debe hacer previamente un login";
        $a = "<a href='../index.php'>Acceder a la pantalla de login</a>";
    }
    ?>
    <link rel="stylesheet" href="../css/form-style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <div class="header">
            <h1 class="title"><?= $msg;?></h1>
        </div>
    </main>
    <div class="container-btn">
        <button><?= $a;?></button>
    </div>
</body>
</html>