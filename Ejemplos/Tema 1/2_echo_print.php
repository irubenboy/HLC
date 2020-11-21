<?php


echo "Hola mundo";

echo " 1- Esto abarca
multiple líneas. Los saltos de línea NO
se mostrarán";

//EL salto de línea se visualiza en mi código fuente HTML
echo "2-Esto abarca múltiples líneas. Los saltos de línea también\nse mostrarán en el código fuente.";

//EL salto de línea se muestra en pantalla. Para la representación en pantalla <br/>
echo "3-Esto abarca múltiples líneas. Los saltos de línea también <br/> se mostrarán en pantalla.";


echo "para escapar caracteres se \"hace así\".";

//PRINT
echo "<br/><br/> PRINT <br/><br/>";

print("Hola mundo<br/>");

print "print() también funciona sin paréntesis.";

print "Esto separa
múltiples líneas. Los saltos de línea también
se mostrarán";

print "para escapar caracteres se \"hace así\".";

?>
<!-- DIFERENCIAS:
    Ambas funciones nos permiten mostrar un output en pantalla y
    ambas funciones no llevan paréntesis al momento de llamarlas.
    Mientras que con la función echo podemos imprimir directamente
    varias cadenas a la vez, con la función print solo podremos
    imprimir una cadena cada vez que sea llamada.
-->

<?php
//primero probaremos la función echo para imprimir múltiples cadenas
echo "Primera cadena", " segunda cadena", " tercera cadena"; //se pueden imprimir varias cadenas separadas por comas


//ahora probaremos print. Vemos que con echo solo hemos usado una
// línea pero con print es necesario 3 líneas de código
print "Primera cadena";
print " segunda cadena";
print " tercera cadena";

//No se puede
//print "Primera cadena", " segunda cadena", " tercera cadena";
?>



