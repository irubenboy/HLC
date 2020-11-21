<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      $a = $_GET['a'];
      $b = $_GET['b'];
      echo "La suma de $a mas $b es ", $a + $b ."<br>";

      // //¿Qué tipo de datos devuelve el métod get?
      echo "El tipo de dato es:", gettype($b) ;

      /******$_POST***/
  
      // $a = $_POST['a'];
      // $b = $_POST['b'];
      // echo "La suma de $a mas $b es ", $a + $b."<br>";
      
      //¿Qué tipo de datos devuelve el métod get?
      // echo "El tipo de dato es:", gettype($b);

      /******$_REQUEST***/

      // $a = $_REQUEST['a'];
      // $b = $_REQUEST['b'];
      // echo "La suma de $a mas $b es ", $a + $b ."<br>";

      //¿Qué tipo de datos devuelve el métod get?
      // echo "El tipo de dato es:", gettype($b) ."<br>";

      // $_GET['a'] = 'a';
      // $_POST['b'] = 'b';

      echo "<pre>";

      var_dump($_GET); 
      var_dump($_POST);
      var_dump($_REQUEST); 

      echo "</pre>";
    

    ?>
  </body>
</html>
