<?php
    $cad = '082307';
    $cadFinal = wordwrap($cad, 2, ":", true);

    printf("Cadena de entrada: '%s' <br> Salida esperada: '%s'", $cad, $cadFinal);
?>