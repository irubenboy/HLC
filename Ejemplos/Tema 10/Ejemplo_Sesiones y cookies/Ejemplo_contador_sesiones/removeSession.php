<?php
  //1. Inicializamos session.
  session_start();

  echo "<pre>";print_r($_SESSION);echo "</pre>";

  //Eliminamos la variable de session.
  unset($_SESSION["num_access"]);

  //Eliminamos todas las variables de sesión
  $_SESSION = array();

  // Finalmente, destruye la sesión
  session_destroy();
?>
<html>
    <head>
        <title>Trabajando con Sesiones</title>
    </head>
    <body>
        <center>
        <h2>Trabajando con sesiones</h2>
        <br />
        <h3>Contador de accesos borrado</h3>
        <br /><br /><br />
        <a href="ejemploSession.php">Volver</a>
        </center>
    </body>
</html>
