<?php
/*
El operador + utilizado con dos arrays devuleve su unión.
EL array resultante contendrá primer los elementos del primer array
(el que aparece a la izquierda del operador) y a continuación los del 
segundo, pero sin repetir clave. Si hay elementos con la misma clave en los 
dos arrays, el segundo no se añade al resultado.
*/


	$arr1 = array(
		10 => "3000",
		20 => "4000",
		30 => "6000",
	);

	echo "<pre>";
	print_r($arr1);
	echo "</pre>";

	echo "<br>";
	$arr2 = array(
		10 => "8000",
		15 => "6000",
		20 => "4000",
	);
	echo "<pre>";
	print_r($arr2);
	echo "</pre>";
	echo "<br>";

	$arr3 = $arr1 + $arr2;

	echo "<pre>";
	print_r($arr3);
	echo "</pre>";