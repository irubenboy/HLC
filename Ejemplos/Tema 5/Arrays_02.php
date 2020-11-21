<?php

$array_numerico = array("Lunes","Martes","Miercoles","Jueves","Viernes" );

//Sintaxis abreviada (A partir de PHP 5.4)
//$array_numerico = ["Lunes","Martes","Miercoles","Jueves","Viernes" ];

$array_asociativo = array("Lunes" => "Lentejas", "Martes" => "Macarrones",
                         "Miercoles" => "Spaguettis",
                         "Jueves" => "Albondigas",
                         "Viernes" => "Morcilla");


//Imprimimos una matriz
print "<pre>"; //fuerza a mostrar los saltos de línea

    print_r($array_numerico);

    //guarda el valor en una variable tmp
    $tmp = print_r($array_asociativo, true);
    print $tmp;
    //Cuando el parámetro es establecido a TRUE, print_r() devolverá 
    //la información en lugar de imprimirla.

    //Imprimir una matriz y aporta información sobre el tipo.
    var_dump($array_asociativo);

//ordena un array y mantiene la aosciación de indices
var_dump(asort($array_asociativo));
print "</pre>";


// var_dump(sort($array_numerico)); 
// var_dump(rsort($array_numerico));
 
// var_dump(arsort($array_asociativo)); 
// var_dump(ksort($array_asociativo)); 
// var_dump(krsort($array_asociativo));

// //Matriz multidimensional
$datos[1]["nombre"] = "Santiago";
$datos[1]["apellidos"] = "Ramón y Cajal";
$datos[2]["nombre"] = "Leonardo";
$datos[2]["apellidos"] = "Torres Quevedo";

print "<pre>";
print_r($datos);
print "</pre>";





?>