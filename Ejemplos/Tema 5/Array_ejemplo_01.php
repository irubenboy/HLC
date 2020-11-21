<?php

//El siguiente ejemplo demuestra como crear un array de dos dimensiones, 
//como especificar claves para un array asociativo y como omitir y continuar 
//índices numéricos en array normales.

$fruits = array (
    "frutas"  => array("a" => "naranja", "b" => "plátano", "c" => "manzana"),
    "números" => array(1, 2, 3, 4, 5, 6),
    "hoyos"   => array("primero", 5 => "segundo", "tercero")
);

echo "<pre>";
//print_r — Imprime información legible para humanos sobre una variable
print_r($fruits);
echo "</pre>";

//Array asociativo:
$estatura = array("Rosa" => 168, "Ignacio" => 175, "Daniel" => 172, "Rubén" => 182);
echo "<pre>";
echo "La estatura de Daniel es ", $estatura['Daniel'] , " cm";
echo "</pre>";

//Con los arrays asociativos se puede usar también la sintaxis abreviada
$estatura2 = [
    "Rosa" => 168,
    "Ignacio" => 175,
    "Daniel" => 172,
    "Rubén" => 182,
];

//También se pueden asignar de forma individual:
$estatura['Rosa'] = 168;
$estatura['Ignacio'] = 175;
$estatura['Daniel'] = 172;
$estatura['Rubén'] = 182;
echo "La estatura de Daniel es ", $estatura['Daniel'] , " cm";

?>