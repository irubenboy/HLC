<?php
    $cadena = "rayy@example.com";
    $tresUltimosCaracteres = substr($cadena, strlen($cadena)-3);
    printf("Los tres últimos caracteres de la cadena %s son '%s'",
    $cadena, $tresUltimosCaracteres);
?>