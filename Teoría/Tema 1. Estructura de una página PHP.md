# Tema 1. Estructura de una página PHP

[TOC]

----

## 1. Introducción

Una página PHP es un archivo de texto que contiene uno o varios fragmentos de código PHP y que también puede contener fragmentos de código HTML.

## 2. Fragmentos PHP

Los fragmentos de código PHP están delimitados por las etiquetas <?php (etiqueta inicial) y ?> (etiqueta final) y contienen las instrucciones de PHP.

```php
<?php

print "<p>Hola</p>\n";

?>
```



Los fragmentos de PHP no pueden anidarse, es decir, no puede haber un fragmento dentro de otro.

```php
<?php

print "<p>Hola</p>\n";

<?php

print "<p>Adios</p>\n";

?>
```



Si en una misma página hay varios fragmentos PHP, se tratan como un único programa.

```php
<?php

$saludo = "Hola";     // Se define una variable

print "<p>$saludo</p>";  // Se escribe el valor de la variable

?>

 

<?php

$saludo = "Hola";       // Se define una variable

?>

<?php

print "<pre>$saludo<pre>";  // Se escribe el valor de la variable

?>
```



## 3. Fragmentos PHP y Fragmentos HTML

En una página PHP todo lo que no son fragmentos PHP son fragmentos HTML. Los fragmentos de código HTML no están delimitados por ninguna etiqueta.

```php
<?php

print "<p>Hola</p>\n";

?>
```

```html
<p> ¿Cómo estás?</p>
```




<p>¿Cómo estás?</p>

Cuando un navegador solicita una página PHP a un servidor, el servidor lee el archivo secuencialmente y va generando el resultado:

·     si la página contiene fragmentos HTML, el código HTML se incluye sin modificados en el resultado.

·     si la página contiene fragmentos PHP, se ejecutan las instrucciones que se encuentran en los fragmentos de código PHP. Si esas instrucciones generan texto, el texto se incluye en el resultado.

Cuando el servidor termina de leer el archivo, el servidor envía al navegador el resultado.

Es importante señalar que:

·     El navegador recibe una página web (es decir, únicamente código HTML), no recibe código PHP.

·     Los fragmentos PHP tiene que generar las etiquetas HTML que se necesiten para una correcta visualización de la página web en el navegador.

·     El navegador no puede distinguir en la página recibida, qué parte ha sido generada en un fragmento PHP y qué parte se encontraba ya en un fragmento HTML.

·     Como la página PHP se lee secuencialmente, el código HTML generado por los fragmentos PHP y el incluido en los fragmentos HTML se encuentran en el mismo orden en que se encontraban los fragmentos en la página PHP.

En un fragmento PHP no pueden escribirse etiquetas HTML sueltas; el código HTML debe generarse siempre con instrucciones de PHP. El programa siguiente no puede ni siquiera ejecutarse y produce un error de sintaxis.

```php
<?php
<p>Hola</p>
?>
```



## 4. Delimitador <? … ?>

El delimitador <? ... ?> no se debe utilizar. Se comenta en esta lección porque todavía se puede encontrar en código escrito hace muchos años.

El delimitador <? se podía utilizar antiguamente como delimitador de bloques PHP, pero desde hace años se desaconseja completamente su uso porque provoca conflictos, entre otros, con la instrucción de procesamiento xml (<?xml) de los documentos XML. En su lugar, se debe utilizar el delimitador <?php .. ?>.

Mediante la directiva short_open_tag (etiqueta de apertura abreviada) se puede permitir el uso del delimitador <? además del delimitador <?php. Si la directiva short_open_tag tiene el valor On.

Pero si la directiva short_open_tag tiene el valor Off (valor recomendado), el mismo programa produciría un resultado incorrecto y que puede resultar chocante, ya que en el navegador se puede ver el programa original.

Este resultado se debe a que como el programa no contiene el delimitador <?php, su contenido no se reconoce como fragmento PHP. Como no se reconoce como fragmento PHP, el servidor lo envía tal cual, al navegador, que no puede mostrarlo correctamente puesto que no es HTML correcto. Abriendo la vista de código fuente en el navegador, se podría ver mejor el programa completo.

## 5. Delimitador <?= … ?> 

El delimitador <?= es una abreviatura de la expresión _<?php echo_ que se utiliza en muchos frameworks de PHP en los documentos que sirven de plantilla de generación de interfaces, sobre todo cuando estas plantillas las van a editar usuarios que pueden no tener conocimientos de programación (diseñadores gráficos, etc.).

## 6. Comentarios

En un fragmento PHP se pueden comentar líneas de código utilizando:

·     // para comentarios de una línea.

·     # para comentarios de una línea.

·     /* */ para comentarios de varias líneas.

Estos comentarios no se añaden al código HTML generado por la página, por lo que no pueden verse en el navegador.

## 7. Instrucciones para mostrar por pantalla.

Todos los lenguajes de programación tienen como mínimo una instrucción para poder mostrar datos por pantalla, en este caso, PHP tiene dos instrucciones para ello, echo y print.

Ambas instrucciones nos permiten mostrar un output en pantalla. Sin embargo, existe una diferencia importante pero no muy conocida entre ambas. Mientras que con la función echo podemos imprimir directamente varias cadenas a la vez, con la función print solo podremos imprimir una cadena cada vez que sea llamada.