<?php
include('php/const.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubén Moreno Narbona - Boletín <?= NOMBRE;?> - Inicio</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/table.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container-exercises">
        <div class="header">
            <h2 id = "title">Boletín <?= NOMBRE;?></h2>
            <span id = "subtitle">Rubén Moreno Narbona - 2º DAM</span>
        </div>
        <div class="list-exercises">
            <ol class="exercises">
            <?php
            for($i = 1; $i <= MAX_EXERCISES; $i++){
                $num_exercise = $i < 10 ? "0$i" : $i;
            ?>
                <li class = "exercise"><?= $enunciados[$i-1];?> <br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            include("php/exercise$num_exercise.php");
                        ?>
                    </div>
                    <div class="code">
                        <?php
                        ini_set("highlight.default", "#40dee9");
                        ini_set("highlight.string", "#e9404a");
                        ini_set("highlight.keyword", "#d06dee");
                        ini_set("highlight.html", "#cc9933");
                        highlight_file("php/exercise$num_exercise.php");
                        ?>
                    </div>
                </div>
                </li>
            <?php
            }
            ?>
            </ol>
        </div>
    </div>

    <script src="js/show.js"></script>
</body>
</html>