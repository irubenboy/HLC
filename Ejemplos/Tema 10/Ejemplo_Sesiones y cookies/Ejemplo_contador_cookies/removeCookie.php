<?php
  //Al definir la cookie sin valor realmente lo que estamos haciendo es
  //ELIMINARLA
  setcookie("num_accesos");
  //setcookie("num_access","", time() - 10);
    echo "<pre>";print_r($_COOKIE);echo "</pre>";
?>
<html>
    <head>
        <title>Trabajando con Cookies</title>
    </head>
    <body>
        <center>
        <h2>Trabajando con cookies</h2>
        <br />
        <h3>Contador de accesos borrado</h3>
        <br /><br /><br />
        <a href="ejemploCookie.php">Volver</a>
        </center>
    </body>
</html>
