<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1-A</title>
</head>
<body>
    <table>
    <?php
    /*
    Mostrar en pantalla una tabla de 10 por 10 con los números del 1 al 100, haz uso de variables.
    */
    $num = 1;
    for($i = 1; $i <= 10; $i++){
             echo '<tr>';
             for($j = 1; $j <= 10; $j++){
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