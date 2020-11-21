<?php
    $cadena = "www.example.com/public_html/index.php";
    $file = substr($cadena, strripos($cadena, '/'));

    printf("El fichero de la página URL %s es '%s'",
    $cadena, $file);
?>