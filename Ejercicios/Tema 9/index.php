<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de ficheros</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form_style.css">
</head>
<body>
    <main>
        <div class="header">
            <h2 class="title">Subida de ficheros</h2>
            <span class="subtitle">Rubén Moreno Narbona - 2º DAM</span>
        </div>
        <div class="container-form">
            <form method="post" action="php/show_uploads.php" enctype="multipart/form-data">
                <div class="input-container">
                    <input type="file" name="files[]" id="archivo" multiple/>
                    <label for="files">Subida de ficheros</label>
                </div>
                <div class="input-container">
                        <textarea name="content" id="" cols="30" rows="10" placeholder = "Escriba algo aquí"></textarea><br>
                        <label for = "content">¿Qué deseas escribir en el fichero?</label>
                </div>
                <div class="submit">
                    <input type="submit" value="Subir fichero" />
                </div>
                
            </form>
            
        </div>
    </main>
    
</body>
</html>