<?php

echo "Hola pagina2 <br>";
//2.Recogemos los parámetros con el método get (enviados href):
print_r($_GET);


//1.Redireccionamos a otra página mediante php:
// header ("location: pagina3.php");


//2.Header también puede pasar parámetros, redireccionamos parámetros desde el propio servidor:
// header ("location: pagina3.php?name=" .$_GET["name"]);



?>




