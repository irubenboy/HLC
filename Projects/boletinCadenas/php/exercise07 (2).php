<?php
    $cadena = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
    $longitud = 7;
    $psswdRandom = substr(str_shuffle($cadena), 0, $longitud);

    printf("La contraseña obtenida es %s", $psswdRandom);
?>