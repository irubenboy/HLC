<?php

/**
 * break
 *
 * Finaliza la ejecución de la estructura
 * for, foreach, while, do-while o switch en curso.
 */

$polos = ['CSS', 'JS', 'HTML', 'PHP'];

// foreach ($polos as $posicion => $polo) {
//     echo "Tengo un polo de {$polo} en la posición {$posicion}.\n";
//     break;
//     echo "Esto no llega a ejecutarse";
// }

/**
 * continue
 *
 * Se utiliza dentro de las estructuras de control para saltar
 * el resto de la iteración actual.
 * Y continua con la siguiente ejecución del ciclo.
 */
// for ($i = 0; $i <= 50; $i++) {
//     if ($i % 2 == 0) {
//         continue;
//     }
//     echo "Tengo el número {$i} que es impar.\n";
// }

foreach ($polos as $posicion => $polo) {
    if ($polo == 'JS') {
        continue;
        echo "Voy a saltarme el polo JS porque ya lo vendí.\n";
    }
    echo "Tengo un polo de {$polo}.\n";
}
