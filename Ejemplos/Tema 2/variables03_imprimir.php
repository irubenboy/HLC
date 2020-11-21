<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <!--IMPRIMIR TEXTO: echo, print, print_r, var_dump-->
    <!--Lo más habitual es utilizar echo y print para imprimir texto en general 
        y utilizar print_r y var_dump para imprimir información de variables.
    -->

    <?php
      //print es un constructor de lenguaje (más rápido que las funciones y no necesitan paréntesis)
      print 'Hola';
      //La operación anterior es equivalente a
      print('Hola');
      //print_r es una función, la siguiente expresión es incorrecta y genera error (necesita de paréntesis)
      // print_r 'Hola';
      print_r('Hola');

      print"<br>";

      /*****ECHO vs PRINT*******/
      //1-print imprime una cadena, echo puede imprimir más de una separadas por coma
      print 'Hola <br>';
      echo 'Hola', 'Hola de nuevo';
      // print 'Hola', 'Hola de nuevo'; no se puede nos da error

      print"<br>";

      //2-print devuelve un valor int que según la documentación siempre es 1, 
      //  por lo que puede ser utilizado en expresiones mientras que echo es tipo void,
      //  no hay valor devuelto y no puede ser utilizado en expresiones:

      //Se imprime "Hola" y la variable $foo toma el valor 1
      $foo = print 'Hola variable foo';
      print"<br>";

      //La siguiente expresión da error
      // $foo = echo 'Hola';


       /*****PRINT_R vs VAR_DUMP******/

       /*Estas dos funciones imprimen los detalles de una variable, 
          incluyendo su valor, en un formato legible por el humano. 
          Si es un array o un objeto también imprimen los detalles 
          de cada elemento. Se utilizan frecuentemente durante la depuración de código,
          situación en la que var_dump suele ser más útil por la mayor información 
          que proporciona. Las diferencias:
            1 - Si el valor de la variable es una cadena de texto, var_dump imprime 
                la cadena entre dobles comillas, print_r no.
            2 - print_r no imprime nada visible para false y cadenas vacías.
            3-  var_dump proporciona información sobre el tamaño y tipo de datos 
                de la variable y, en el caso de arrays y objetos, de los elementos 
                que la componen. print_r NO da información sobre el tamaño de la variable 
                ni sobre el tipo de datos.
       */

      $foo = array( 5, 0.0, "Hola", false, '' );

      var_dump( $foo );
      //Imprime
      // array(5) {
      //     [0]=> int(5)
      //     [1]=> float(0)
      //     [2]=> string(4) "Hola"
      //     [3]=> bool(false)
      //     [4]=> string(0) ""
      // }
      
      print"<br>";
      print_r( $foo );
      // //Imprime
      // Array (
      //     [0] => 5
      //     [1] => 0
      //     [2] => Hola
      //     [3] =>
      //     [4] =>
      // )
    //4- print_r puede devolver el resultado en lugar de imprimirlo si se proporciona el 
    //segundo parámetro como true:
      $foo = array( 5, 0.0, "Hola", false, '' );
      $output = print_r( $foo, true );

    ?>
  
    <!-- Usamos pre para visualizarlo mejor-->
    <pre>
      <?php
      
        $numero = 20;
        $palabra = "hola";
        print_r(get_defined_vars());//¿Pára que se usa esta función?
      ?>
    </pre>

  <!--Print_r y Var_dump-->
    <pre>
      <?php
        $a = array ('a' => 'manzana', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
        print_r ($a);

        var_dump($a);
      ?>
    </pre>



  </body>
</html>
