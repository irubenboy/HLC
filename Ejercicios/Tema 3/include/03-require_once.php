<?php

//La sentencia require_once es idéntica a require excepto que PHP verificará 
//si el archivo ya ha sido incluido y si es así, no se incluye (require) de nuevo.
require_once "script2.php";

require_once "script2.php";

$var1 = "script1";

echo $var1 . " ". $var2. "<br>";