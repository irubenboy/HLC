<?php
    $cad = "En un lugar de la mancha cuyo nombre";
    $arrayCad = explode(' ', $cad);
    $firstWord = $arrayCad[0];

    printf("Original Cadena: '%s' <br> Valor esperado: '%s'", $cad, $firstWord);
?>