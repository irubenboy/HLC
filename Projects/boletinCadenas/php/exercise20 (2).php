<?php
    $cad = '345,102,543.12';
    $caracter = ",";
    $cadFinal = str_replace($caracter, '', $cad);

    printf("Original cadena: '%s' <br> Valor esperado: '%s'", $cad, $cadFinal);
?>