<?php
    $cad = '000547023.24';
    $cadSinCeros = ltrim($cad, '0');

    printf("Original cadena: '%s' <br> Valor esperado: '%s'", $cad, $cadSinCeros);
?>