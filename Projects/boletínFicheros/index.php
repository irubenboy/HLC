<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form-style.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/error.css">
    <title>Boletín 5 - Ficheros</title>
    <?php
        include_once('php/const.php');
        include_once('lib/functions.php');
        $errors = [];
        $rights = [];
        if(isset($_GET['err'])){
            $errors = explode(",", $_GET['err']);
            foreach($errors_const as $error => $text){
                for($i = 0; $i < count($errors); $i++){
                    if($errors[$i] == $error){
                        $errors[$i] = $text;
                    }
                }
            }
        }
        
        if(isset($_GET['rgh'])){
            $rights = explode(",", $_GET['rgh']);
            foreach($rights_const as $right => $text){
                for($i = 0; $i < count($rights); $i++){
                    if($rights[$i] == $right){
                        $rights[$i] = $text;
                    }
                }
            }
        }
    ?>
</head>
<body>
    <main>
        <div class="header">
            <h2 class="title">Datos de Libros</h2>
        </div>
        <div class="container-form">
            <form action="php/libros_guardar.php" method="POST">
                <div class="input-container">
                    <input class="input" type="text" name="title" placeholder="Título">
                    <label for="title">Título</label>
                </div>
                <div class="checkbox-container">
                    <label for="type">Tipo</label>
                    <input type="radio" name="type" value = "1"> Ejemplar
                    <input type="radio" name="type" value = "2"> Colección
                </div>
                <div class="input-container">
                    <textarea class="input" name="observations" cols="50" rows="10" placeholder=""></textarea>
                    <label for="observations">Observaciones</label>
                </div>
                <div class="submit">
                    <input type="submit" value="Guardar datos" name="save">
                </div>
            </form>
        </div>
        <div class="container-btn">
            <button id = "btnSavedBooks">Mostrar Libros Guardados</button>
        </div>

        <div class="container_errors_rights">
            <?php
                print_errors($errors);
                print_rights($rights);
            ?>
        </div>

    </main>
    <script>
    var btn = document.getElementById('btnSavedBooks');

    btn.addEventListener('click', function(){
        location.href = "php/libros_datos.php";
    });
    </script>
</body>
</html>