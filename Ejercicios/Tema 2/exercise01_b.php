<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-B</title>
    <link rel="stylesheet" href="exercise01_b.css">
</head>
<body>
    <table>
    <?php
    /*
    Ídem al ejercicio anterior, pero colorear las filas alternando colores, además el tamaño de la tabla será una constante: define(TAM, 10).
    */
    define('TAM', 10);
    $num = 1;
    for($i = 1; $i <= TAM; $i++){
             echo '<tr>';
             for($j = 1; $j <= TAM; $j++){
    ?>
                <td><?=$num++;?></td>
    <?php
             }
             echo '</tr>';
        }
    ?>
    </table>
</body>
</html>