<?php
  //1. Iniciamos la session.
  session_start();

  //Comprobamos si existe la variable de session "num_accesos", en ese caso lo
  //incrementamos
  if(isset($_SESSION['num_accesos'])) {
    //2 - 3 . Registramos y usamos variables
    $_SESSION['num_accesos'] = $_SESSION['num_accesos'] + 1;
   } else {
    $_SESSION['num_accesos'] = 1; //2. Registramos clave/valor
  }

  echo "<pre>";print_r($_SESSION);echo "</pre>";
?>

<html>
    <head>
        <title>Session</title>
    </head>
    <body>
        <center>
          <h2>Trabajando con sessiones</h2>
          <br />
          <h3>Contador de accesos</h3>
          <?php

              if($_SESSION['num_accesos'] > 1){
                echo "Has accedido a esta página <b>".$_SESSION['num_accesos']."</b> veces";
              } else {
                echo "Es la primera vez que accedes a esta página";
              }

          ?>

          <br />
          <br />
          <br />
          <a href="ejemploSession.php">Actualizar</a> | <a href="removeSession.php">Eliminar</a>
        </center>
    </body>
</html>
