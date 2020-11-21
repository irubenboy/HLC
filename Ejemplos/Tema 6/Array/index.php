<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
    <!--Cuando quremos guardar varios datos de entrada en un mismo campo en la base de datos-->
    <h3>Enviar datos mediante un array(una dimensión)</h3>
    <form action="ejemplo.php">
      <p>Nombre: <input type="text" name="nombre[1]"></p>
      <p>Apellido: <input type="text" name="nombre[2]"></p>
      <p><input type="submit" value="Enviar"></p>
    </form>
  </body>
</html>
