<?php

/**
 * Type hinting
 * Podemos especificar el tipo de dato que recibimos en un parámetro.
 *
 * Si el parámetro que se le pasa a la función no coincide con
 * el tipo de dato especificado PHP arroja un error Fatal.
 */

function saludar(array $nombres){
    foreach ($nombres as $nombre) {
        echo "Hola, {$nombre}.\n";
    }
}

saludar(['Pedro', 'Mateo', 'Lucas']);
//Fatal error
saludar('Alvaro');
