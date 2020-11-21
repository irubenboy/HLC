<?php
    $cadena = "rayy@exameple.com";
    $nombre = substr($cadena, 0, stripos($cadena, '@'));
    printf("El nombre del correo %s es '%s'",
    $cadena, $nombre);
?>
