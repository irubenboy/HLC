<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="exercise02.css">
</head>
<body>
<?php
    define('DAY', 365);
    define('HOUR', 24);
    define('MIN', 60);
    define('SEC', 60);
    $edad = 33;
    $edad_dias = $edad * DAY;
    $edad_horas = $edad_dias * HOUR;
    $edad_min = $edad_horas * MIN;
    $edad_sec = $edad_min * SEC;

    echo '<span class = "start">**************************************************************</span><br>';
    echo '<span class = "start">Cálculos para la edad de una persona</span><br>';
    echo '<span class = "start">**************************************************************</span><br>';

    if($edad >= 0){
        echo "<span>Para una persona de $edad años</span><br><br>";
        echo "<span>Su edad en días es: $edad_dias</span><br>";
        echo "<span>Su edad en horas es: $edad_horas</span><br>";
        echo "<span>Su edad en minutos es: $edad_min</span><br>";
        echo "<span>Su edad en segundos es: $edad_sec</span><br>";

    } else {
        echo '<span>No se ha indicado edad</span>';
    }
?>

</body>
</html>