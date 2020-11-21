<?php

/**
 * Parámetros
 *
 * Son valores que recibe la función
 *
 * Una función puede tener uno o más parámetros.
 */

function saludar($nombre){
    echo "Hola {$nombre}.<br>";
}

saludar('Daniel');
saludar('Luis');
saludar('Carlos');
saludar(5.1);

function sumar($numero1, $numero2, $numero3){
    return $numero1 + $numero2 + $numero3."<br>";
}

echo sumar(4, 5, 1);


function bienvenida(){
    // array con todos los parámetros de la función.
    //Devuelve un array que se compone de una lista de argumentos de función
    $nombres = func_get_args();

    // Iteramos los nombres.
    foreach ($nombres as $nombre) {
        echo "Bienvenido, {$nombre}.<br>";
    }
}

//bienvenida('Ricardo', 'Alan', 'Alvaro', 'Fabian');
bienvenida('Ricardo', 'Alan', 'Fabian');
