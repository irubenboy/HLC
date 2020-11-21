<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <?php
      
      
      //Imprimimos el valor de REQUEST
      echo "<pre>";
      print_r($_REQUEST);
      echo"</pre>";

      

      $nombre = $_REQUEST["nombre"];

      if ($nombre[1] == "") {
          print "<p style=\"color: red\">No ha escrito su nombre.</p>\n";
      } else {
          print "<p>Su nombre es <strong>$nombre[1]</strong>.</p>\n";
      }
      
      if ($nombre[2] == "") {
          print "<p style=\"color: red\">No ha escrito su apellido.</p>\n";
      } else {
          print "<p>Su apellido es <strong>$nombre[2]</strong>.</p>\n";
      }
      
    ?>
  </body>
</html>
