    <?php

/**
 * Foreach
 *
 * Proporciona un modo sencillo de iterar sobre arrays y objetos.
 * El iterador foreach se utiliza para recorrer todos los elementos 
 * de un array sin que tengamos que preocuparnos por los índices ni 
 * por el tamaño del array.
 */

//Los valores de un array se pueden asignar directamente en una línea. El índice comienza en 0.
$temp = array(16, 15, 17, 15, 16);
//Sintaxis abreviada
$polos = ['adidas', 'nike', 'puma', 'reebok'];

foreach ($polos as $polo) {
    echo "Tengo un polo de {$polo}. <br>";
}

foreach ($polos as $clave => $valor) {
    echo "La clave {$clave} tiene el valor {$valor}.<br>";
}

// Sintaxis alternativa
foreach ($polos as $clave => $valor):
    echo "La clave {$clave} tiene el valor {$valor}.<br>";
endforeach;

//Otra opción:
$cajonDeSastre = [30, -7, "Me gusta el queso", 56, "¡eh!", 237];

foreach ($cajonDeSastre as $cosa) {
  echo "$cosa<br>";
}
