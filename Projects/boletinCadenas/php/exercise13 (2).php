<?php
    $cad = "Un lugar de la mancha cuyo nombre";
    $posInicial = "la";
    $cadInserar = "test";
    $cadHastaPosInicial = substr($cad, 0,
        stripos($cad, $posInicial)+strlen($posInicial));
    $cadDesdePosInicial = substr($cad,
        stripos($cad, $posInicial)+strlen($posInicial));
    $cadFinal = $cadHastaPosInicial . " " . $cadInserar . $cadDesdePosInicial;

    printf("Original cadena: '%s' <br> Valor esperado: '%s'", $cad, $cadFinal);
?>