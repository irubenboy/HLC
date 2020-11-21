<?php

$var = '';

// Esto evaluará a TRUE así que el texto se imprimirá.
if (isset($var)) {
    echo "Esta variable está definida, así que se imprimirá";
}

// En los siguientes ejemplo usaremos var_dump para imprimir
// el valor devuelto por isset().

$a = "prueba";
$b = "otraprueba";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>