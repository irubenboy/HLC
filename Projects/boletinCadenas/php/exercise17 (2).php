<?php
    $cad = "En un / lugar de / la mancha de / cuyo nombre";
    $caracter = "/";
    $cadFinal = str_replace($caracter, '', $cad);

    printf("Original cadena: '%s' <br> Palabra a borrar: '%s' <br> Valor esperado: '%s'",
         $cad, $caracter, $cadFinal);
?>