<?php

/**
 * Closures
 *
 * Funciones que no tienen nombre, conocidas como
 * funciones anóminas.
 *
 * Deben terminar en punto y coma;
 *
 * Podemos asignar closures(funciones) a variables.
 */
function () {
    echo "Soy una función anónima.\n";
};

$gato = function () {
    echo "miau\n";
};

$gato();
$gato();
$gato();
$gato();
$gato();
