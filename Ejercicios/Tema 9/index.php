<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de ficheros</title>
</head>
<body>
    <form method="post" action="subir.php" enctype="multipart/form-data">
        <input type="file" name="files[]" id="archivo" multiple/>
        <input type="submit" value="Subir fichero" />
    </form>
</body>
</html>