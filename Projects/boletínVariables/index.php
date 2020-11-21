<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubén Moreno Narbona - Boletín 2 - Inicio</title>
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/table.css">
</head>
<body>
    <div class="container-exercises">
        <div class="header">
            <h2 id = "title">Boletín Variables</h2>
            <span id = "subtitle">Rubén Moreno Narbona - 2º DAM</span>
        </div>
        <div class="list-exercises">
            <ol class="exercises">
                <li class = "exercise">Escribe un programa que muestre tu nombre por pantalla, nombre del ciclo formativo que estás realizando y curso. <br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $miNombre = "Rubén Moreno Narbona";
                            $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
                            $miCurso = "2º DAM";

                            echo "$miNombre - $nombreCiclo - $miCurso";
                        ?>
                    </div>
                    <div class="code">
                        <?php
                        ini_set("highlight.default", "#40dee9");
                        ini_set("highlight.string", "#e9404a");
                        ini_set("highlight.keyword", "#d06dee");
                        ini_set("highlight.html", "#cc9933");
                        highlight_string('<?php
    $miNombre = "Rubén Moreno Narbona";
    $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
    $miCurso = "2º DAM";

    echo "$miNombre - $nombreCiclo - $miCurso";
?>
                        ');
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Modifica el programa anterior para que muestre tu dirección, nombre de las asignaturas  del ciclo.El texto debe aparecer en una línea diferente.<br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $miNombre = "Rubén Moreno Narbona";
                            $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
                            $miCurso = "2º DAM";
                            $dir = "Calle Ciudad de Tarifa";
                            $subjects = array("Programación de Servicios y Procesos (PRO)", "Programación Multimedia Para Dispositivos Móviles (PMPDMO)", "Hora de Libre Configuración (HLC)", "Empresa e Iniciativa Emprendedora (EIE)", "Sistema de Gestión Empresarial (SGEM)", "Desarrollo de Interfaces (DEINT)", "Acceso a Datos (ACDAT)");

                            echo "$miNombre - $nombreCiclo - $miCurso";
                            echo "<br>", "$dir", "<br>", "Asignaturas:\n";
                            echo "<ul>\n";
                            foreach($subjects as $d){
                                echo "\t<li>$d</li>\n";
                            }
                            echo "</ul><br>";
                        ?>
                    </div>
                    <div class="code">
                        <?php
                        highlight_string('
<?php
    $miNombre = "Rubén Moreno Narbona";
    $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
    $miCurso = "2º DAM";
    $dir = "Calle Ciudad de Tarifa";
    $subjects = array("Programación de Servicios y Procesos (PRO)",
        "Programación Multimedia Para Dispositivos Móviles (PMPDMO)",
        "Hora de Libre Configuración (HLC)",
        "Empresa e Iniciativa Emprendedora (EIE)",
        "Sistema de Gestión Empresarial (SGEM)",
        "Desarrollo de Interfaces (DEINT)",
        "Acceso a Datos (ACDAT)");

    echo "$miNombre - $nombreCiclo - $miCurso";
    echo "<br>", "$dir", "<br>", "Asignaturas:\n";
    echo "<ul>\n";
    foreach($subjects as $d){
        echo "\t<li>$d</li>\n";
    }
    echo "</ul><br>";
?>
                        ');
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Escribe un programa que muestre tu horario de clase mediante una tabla, el recreo debe de aparecer. Dale formato y estilos a la tabla.<br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $pspro = "Programación Servicios y Procesos";
                            $classPspro = "pro";
                            $pmpdmo = "Programación Multimedia Para Dispositivos Móviles";
                            $classPmpdmo = "pmp";
                            $hlc = "Hora de Libre Configuración";
                            $classHlc = "hlc";
                            $acdat = "Acceso a Datos";
                            $classAcdat = "acd";
                            $sgemp = "Sistema de Gestión Empresarial";
                            $classSgemp = "sge";
                            $eie = "Empresa e Iniciativa Emprendedora";
                            $classEie = "eie";
                            $deint = "Desarrollo de Interfaces";
                            $classDeint = "dei";
                        ?>
                        <table class = "timetable">
                            <tr>
                                <td></td>
                                <th>Lunes</th>
                                <th>Martes</th>
                                <th>Miércoles</th>
                                <th>Jueves</th>
                                <th>Viernes</th>
                            </tr>
                            <tr>
                                <th>8:15 - 9:15</th>
                                <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
                                <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
                                <td class = "<?= $classPmpdmo;?>" rowspan = "2"><?= $pmpdmo;?></td>
                                <td class = "<?= $classDeint;?>"><?= $deint;?></td>
                                <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
                            </tr>
                            <tr>
                                <th>9:15 - 10:15</th>
                                <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
                                <td class = "<?= $classDeint;?>" rowspan = "2"><?= $deint;?></td>
                                <td class = "<?= $classPmpdmo;?>" rowspan = "2"><?= $pmpdmo;?></td>
                                <td class = "<?= $classDeint;?>" rowspan = "2"><?= $deint;?></td>
                            </tr>
                            <tr>
                                <th>10:15 - 11:15</th>
                                <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
                                <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
                            </tr>
                            <tr>
                                <th>11:15 -11:45</th>
                                <td class = "recreo" colspan = "5">Recreo</td>
                            </tr>
                            <tr>
                                <th>11:45 - 12:45</th>
                                <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
                                <td class = "<?= $classAcdat;?>" rowspan = "2"><?= $acdat;?></td>
                                <td class = "<?= $classDeint;?>"><?= $deint;?></td>
                                <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
                                <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
                            </tr>
                                <th>12:45 - 13:45</th>
                                <td class = "<?= $classDeint;?>"><?= $deint;?></td>
                                <td class = "<?= $classEie;?>"><?= $eie;?></td>
                                <td class = "<?= $classEie;?>"><?= $eie;?></td>
                                <td class = "<?= $classEie;?>"><?= $eie;?></td>
                            </tr>
                            <tr>
                                <th>13:45 - 14:45</th>
                                <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
                                <td class = "<?= $classEie;?>"><?= $eie;?></td>
                                <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
                                <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
                                <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
                            </tr>

                        </table>
                    </div>
                    <div class = "code">
                        <?php
                            highlight_string('
<?php
    $pspro = "Programación Servicios y Procesos";
    $classPspro = "pro";
    $pmpdmo = "Programación Multimedia Para Dispositivos Móviles";
    $classPmpdmo = "pmp";
    $hlc = "Hora de Libre Configuración";
    $classHlc = "hlc";
    $acdat = "Acceso a Datos";
    $classAcdat = "acd";
    $sgemp = "Sistema de Gestión Empresarial";
    $classSgemp = "sge";
    $eie = "Empresa e Iniciativa Emprendedora";
    $classEie = "eie";
    $deint = "Desarrollo de Interfaces";
    $classDeint = "dei";
?>
<table class = "timetable">
    <tr>
        <td></td>
        <th>Lunes</th>
        <th>Martes</th>
        <th>Miércoles</th>
        <th>Jueves</th>
        <th>Viernes</th>
    </tr>
    <tr>
        <th>8:15 - 9:15</th>
        <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
        <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
        <td class = "<?= $classPmpdmo;?>" rowspan = "2"><?= $pmpdmo;?></td>
        <td class = "<?= $classDeint;?>"><?= $deint;?></td>
        <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
    </tr>
    <tr>
        <th>9:15 - 10:15</th>
        <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
        <td class = "<?= $classDeint;?>" rowspan = "2"><?= $deint;?></td>
        <td class = "<?= $classPmpdmo;?>" rowspan = "2"><?= $pmpdmo;?></td>
        <td class = "<?= $classDeint;?>" rowspan = "2"><?= $deint;?></td>
    </tr>
    <tr>
        <th>10:15 - 11:15</th>
        <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
        <td class = "<?= $classHlc;?>"><?= $hlc;?></td>
    </tr>
    <tr>
        <th>11:15 -11:45</th>
        <td class = "recreo" colspan = "5">Recreo</td>
    </tr>
    <tr>
        <th>11:45 - 12:45</th>
        <td class = "<?= $classAcdat;?>"><?= $acdat;?></td>
        <td class = "<?= $classAcdat;?>" rowspan = "2"><?= $acdat;?></td>
        <td class = "<?= $classDeint;?>"><?= $deint;?></td>
        <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
        <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
    </tr>
        <th>12:45 - 13:45</th>
        <td class = "<?= $classDeint;?>"><?= $deint;?></td>
        <td class = "<?= $classEie;?>"><?= $eie;?></td>
        <td class = "<?= $classEie;?>"><?= $eie;?></td>
        <td class = "<?= $classEie;?>"><?= $eie;?></td>
    </tr>
    <tr>
        <th>13:45 - 14:45</th>
        <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
        <td class = "<?= $classEie;?>"><?= $eie;?></td>
        <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
        <td class = "<?= $classSgemp;?>"><?= $sgemp;?></td>
        <td class = "<?= $classPspro;?>"><?= $pspro;?></td>
    </tr>

</table>');
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Crea la variable $nombre y asígnale tu nombre completo, crea la variable ciclo y asiga el nombre del ciclo. Muestralo por pantalla como el ejercicio 1. <br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                    <?php
                        $miNombre = "Rubén Moreno Narbona";
                        $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
                        $miCurso = "2º DAM";

                        echo "$miNombre - $nombreCiclo - $miCurso";
                    ?>
                    </div>
                    <div class="code">
                        <?php
                            highlight_string('
<?php
    $miNombre = "Rubén Moreno Narbona";
    $nombreCiclo = "Desarrollo de Aplicaciones Multiplataformas";
    $miCurso = "2º DAM";

    echo "$miNombre - $nombreCiclo - $miCurso";
?>
                        ')
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Crea un conversor de moneda, de dólares Australianos a libras . Haz uso de variables.<br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $mount = 3225;
                            $change = 0.55;
                            $op = $mount * $change;

                            echo "El precio $mount $ es de $op £"
                        ?>
                    </div>
                    <div class="code">
                        <?php
                            highlight_string('
<?php
    $mount = 3225;
    $change = 0.55;
    $op = $mount * $change;

    echo "El precio $mount $ es de $op £"
?>
                            ');
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Crea un conversor de moneda, de libras a dólares Australianos. Haz uso de variables.<br><br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $mount = 3225;
                            $change = 1.82;
                            $op = $mount * $change;

                            echo "El precio $mount £ es de $op $"
                        ?>
                    </div>
                    <div class="code">
                        <?php
                            highlight_string('
<?php
    $mount = 3225;
    $change = 0.55;
    $op = $mount * $change;

    echo "El precio $mount $ es de $op £"
?>
                            ');
                        ?>
                    </div>
                </div>
                </li>
                <li class = "exercise">Pinta una pirámide invertida y hueca con asteriscos.<br> <span class = "btnCode">Código</span><span class = "btnSolution">Solución</span>
                <div class="contain-code">
                    <div class="solution">
                        <?php
                            $numFilas = 5;

                            for($numBlancos = 0, $numAsteriscos = ($numFilas*2)-1; $numAsteriscos>0; $numBlancos++, $numAsteriscos -= 2){
                                for($i = 0; $i < $numBlancos; $i++){
                                    echo "&nbsp";
                                }

                                for($j = $numAsteriscos; $j > 0; $j--){
                                    echo "*";
                                }
                                echo "<br>";
                            }
                        ?>
                    </div>
                    <div class="code">
                        <?php
                            highlight_string('
<?php
    $numFilas = 5;

    for($numBlancos = 0, $numAsteriscos = ($numFilas*2)-1;
    $numAsteriscos>0; $numBlancos++, $numAsteriscos -= 2){
        for($i = 0; $i < $numBlancos; $i++){
            echo "&nbsp";
        }

        for($j = $numAsteriscos; $j > 0; $j--){
            echo "*";
        }
        echo "<br>";
    }
?>
                            ');
                        ?>
                    </div>
                </div>
                </li>
            </ol>
        </div>
    </div>

    <script src="js/show.js"></script>
</body>
</html>