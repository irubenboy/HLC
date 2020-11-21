<?php
    $cad = "En un lugar de la mancha cuyo nombre";
    $palabra = "mancha";
    $cadFinal = str_replace($palabra, '', $cad);

    echo $cadFinal;

    printf("Original cadena: '%s' <br> Palabra a borrar: '%s' <br> Valor esperado: '%s'",
        $cad, $palabra, $cadFinal);
?>