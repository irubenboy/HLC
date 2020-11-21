<?php
    $cadena = "En un lugar de la mancha cuyo nombre
    no quiero acordarme";
    $buscar = "cuyo";

    printf("La cadena '$cadena' %scontiene la palabra '$buscar'",
    strpos($cadena, $buscar) ?  "" : "no ");
?>