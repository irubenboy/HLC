<?php

/**
 * Foreach
 *
 * Proporciona un modo sencillo de iterar sobre arrays y objetos.
 */

$polos = ['CSS', 'JS', 'HTML', 'PHP'];

// foreach ($polos as $polo) {
//     echo "Tengo un polo de {$polo}.\n";
// }

// foreach ($polos as $clave => $valor) {
//     echo "La clave {$clave} tiene el valor {$valor}.\n";
// }

// Sintaxis alternativa
foreach ($polos as $clave => $valor):
    echo "La clave {$clave} tiene el valor {$valor}.\n";
endforeach;
