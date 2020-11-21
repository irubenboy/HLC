<?php
 /***********REDIRECCIONAR**********/
 /*
 Para redireccionar entre diferentes páginas PHP, mandar información entre
 un sitio u otro o cambiar de páginas disponemos de dos opciones:
      - mediante PHP con el método header
          https://www.php.net/manual/es/function.header.php
          Podemos redirigir a otra páginas o incluso redirigir parámetros.
      _ mediante html con el href
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
<!--1.Redireccionamos a otra página con html-->
   <a href="pagina2.php">Redirección mediante html</a>
   <br>
<!--2.También podemos pasar parámetros: (get) -->
   <a href="pagina2.php?name=María">Redireccionando parámetros</a>
</body>
</html>



