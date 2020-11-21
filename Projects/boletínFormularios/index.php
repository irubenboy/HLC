<?php
include('php/const.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boletín <?= NOMBRE;?> - Rubén Moreno Narbona</title>
    <link rel="stylesheet" href="style/index.css">
</head>
<body>
   <div class="container-exercises">
    <div class="header">
            <h2 id = "title">HLC</h2>
            <span id="subtitle">Rubén Moreno Narbona - 2º DAM</span>
        </div>
        <div class="list-exercises">
            <ol class="exercises">
                <?php
                for($i = 1; $i <= MAX_EXERCISES; $i++){
                ?>
                    <div class="container-exercise">
                        <li class="exercise"><?= $enunciados[$i-1];?><br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                            <div class="contain-code">
                                <div class="code">
                                    <?php
                                    ini_set("highlight.default", "#40dee9");
                                    ini_set("highlight.string", "#e9404a");
                                    ini_set("highlight.keyword", "#d06dee");
                                    ini_set("highlight.html", "#cc9933");
                                    highlight_file("exercises/search_$i.php");
                                    ?>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php
                }
                ?>
            </ol>
        </div>
   </div>

    <script src="js/show.js"></script>
</body>
</html>