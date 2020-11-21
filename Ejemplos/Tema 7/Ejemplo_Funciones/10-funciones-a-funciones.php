<?php

/**
 * Realiza una operación aritmética.
 *
 * @param  Closure $operacion
 * @param  $mixed  $numero1
 * @param  $mixed  $numero2
 * @return $mixed
 */
function aritmetica(Closure $operacion, $numero1, $numero2){
    // Ejecuta el closure con parámetros
    return $operacion($numero1, $numero2);
}

// Función closure que suma
$sumar = function ($num1, $num2) {
    return $num1 + $num2;
};

// Función closure que resta
$restar = function ($num1, $num2) {
    return $num1 - $num2;
};

// Ejecutar la función aritmética
echo aritmetica($sumar, 9, 2);
echo PHP_EOL;

echo aritmetica($restar, 40, 5);
echo PHP_EOL;
