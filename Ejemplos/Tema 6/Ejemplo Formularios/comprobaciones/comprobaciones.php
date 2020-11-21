<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>

    <?php
    print "<pre>";
    //Con $_REQUEST podemos ver tanto GET como POST
    print_r($_REQUEST);
    print_r("</pre");
    
    //Comprobamos que se ha pulsado el botón:
    if ($_REQUEST["acepto"] == "on") {
      print "<p>Desea recibir información</p>\n";
    } else {
      print "<p>No desea recibir información</p>\n";
    }
    //Detectamos si hemos enviado(pulsado el botón) el formulario o no:
    if (isset($_POST['submit'])){
      print "Has pulsado el botón de enviar";
    }
    //Eliminamos espacios en blanco:
    if (trim($_REQUEST["nombre"]) == "") {
      print "<p>No ha escrito ningún nombre</p>\n";
    } else {
    print "<p>Su nombre es ". trim($_REQUEST["nombre"]) . "</p>\n";
  }

  ?>

    
  </body>
</html>
