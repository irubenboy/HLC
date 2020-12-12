<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info de Libros</title>
    <?php
        include("../lib/functions.php");
        include("../php/const.php");
    ?>
    <link rel="stylesheet" href="../css/form-style.css">
    <link rel="stylesheet" href="../css/error.css">
</head>
<body>
    <div class="header">
        <h2 class = "title">Libros Guardados</h2>
    </div>
    <?php
    $f = "../files/libros.txt";
    $errors = [];
    $file = @fopen($f, "rb", true);
    if(!$file){
        array_push($errors, "ERRNO_2");
    } else {
        if(filesize($f) > 0){
            while($line = fgets($file)){ // lee línea a línea el fichero
                echo str_replace("\n", "<br>", $line);
            }
            fclose($file); // cierra el fichero
        } else {
            array_push($errors, "ERRNO_5");
        }
    }

    foreach($errors_const as $error => $text){
        for($i = 0; $i < count($errors); $i++){
            if($errors[$i] == $error){
                $errors[$i] = $text;
            }
        }
    }
    print_errors($errors);
    ?>

    <div class="container-form">
        <div class="submit">
            <input id = "btnBack" type="submit" value="Volver">
        </div>
    </div>

    <script>
    var btn = document.getElementById('btnBack');

    btn.addEventListener('click', function(){
        location.href = '../index.php';
    })
    </script>
</body>
</html>