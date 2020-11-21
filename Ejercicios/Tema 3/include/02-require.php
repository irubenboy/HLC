<?php

//require es idéntico a include excepto que en caso de fallo producirá un error 
//fatal de nivel E_COMPILE_ERROR. En otras palabras, éste detiene el script mientras 
//que include sólo emitirá una advertencia (E_WARNING) lo cual permite continuar el script.


require "script2.php";

$var1 = "script1";

echo $var1 . " ". $var2. "<br>";
