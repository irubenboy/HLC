<?php
    /*Definimos la variable contador que va guardar el número de accesos
      a nuestra web. Basicamente un contador de visitas. */
    $contador = 1;

    //Comprobamos si existe la "cookie" con nombre "num_accesos", en ese caso
    //aumentamos el contador.
    if(isset($_COOKIE["num_accesos"])){
        $contador = $_COOKIE["num_accesos"] + 1;
    }

    /* Creamos/definimos una cookie con nombre "num_accesos" y valor $contador y
    * que expira/caduca una hora después de definirla.
    * time() -> Devuelve el momento actual medido como el número de segundos
    * desde 1 de Enero de 1970 00:00:00 GMT . */
    setcookie("num_accesos", $contador, time() + 10);

    //Debug.
    echo "<pre>";print_r($_COOKIE);echo "El contador es:$contador"; echo "</pre>";
?>
<html>
    <head>
        <title>Cookies</title>
    </head>
    <body>
        <center>
          <h2>Trabajando con cookies</h2>
          <br />
          <h3>Contador de accesos</h3>
          <?php

              if($contador > 1){
                echo "Has accedido a esta página <B>$contador</B> veces";
              } else {
                echo "Es la primera vez que accedes a esta página";
              }

          ?>

          <br />
          <br />
          <br />
          <a href="ejemploCookie.php">Actualizar</a> | <a href="removeCookie.php">Eliminar</a>
        </center>
    </body>
</html>
