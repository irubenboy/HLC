<?php

/**
 * include:
 *
 * Incluye y evalúa el archivo especificado.
 *
 * Cuando se incluye un archivo, el código que contiene
 * hereda el ámbito de las variables de la línea en la
 * que ocurre la inclusión.
 */

 include "script2.php";

 $var1 = "script1";

 echo $var1 . " ". $var2. "<br>";