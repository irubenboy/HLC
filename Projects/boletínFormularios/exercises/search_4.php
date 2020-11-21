<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/form-style.css">
    <link rel="stylesheet" href="../style/table.css">
    <link rel="stylesheet" href="../style/error.css">
    <title>Document</title>
    <?php
    include_once('../php/const.php');
    include_once('../php/functions.php');
    include_once('../php/error.php');  
    $error = array();
    $result = array(); // Array vacío de momento para introducir los resultados
    if(isset($_POST['search'])){ // Si se ha llegado a esta página desde el botón enviar
        if(isset($_POST['name']) && isset($_POST['age'])){ // si se ha declarado nombre
            $name = $_POST['name']; // nombre
            $surname = $_POST['surname']; // apellido
            $age = $_POST['age']; // edad
            $countries = isset($_POST['countries']) ? $_POST['countries'] : array(); // ciudad
            $ageCompare = $_POST['age_compare']; // comparador de edad
            $conditions = false;

            if(empty($name)){
                $conditions = true;
                array_push($error, ERRNO_1);
            }

            if(empty($age) || !is_numeric($age)){
                $conditions = true;
                array_push($error, ERRNO_2);
            }
            
            if(!$conditions) {
                foreach($arrayPersonas as $p){
                    $usernameCondition = empty($surname) ? 
                        true :
                        strcasecmp($p['surname'], $surname) == 0 ;
                    $ageCondition;
                    switch($ageCompare){
                        case 1:
                            $ageCondition = $p['age'] > $age;
                        break;
                        case 2: 
                            $ageCondition = $p['age'] < $age;
                        break;
                        case 3:
                            $ageCondition = $age == $p['age'];
                        break;
                    }
                    
                    if(strcasecmp($p['firstname'], $name) == 0 
                    && $usernameCondition
                    && $ageCondition){
                        if(count($countries) > 0){
                            foreach($countries as $i => $c){
                                if($countries[$i] == $p['country']){
                                    array_push($result, $p);
                                }
                            }
                        } else {
                            array_push($result, $p);
                        }
                        
                    }
                }
            }
        }
    }
    ?>
</head>
<body>
    <main>
        <div class="header">
            <h1 class="title">Ejercicio 4</h1>
        </div>
        <div class="container-form">
            <form action="search_4.php" method = "post">
                <div class="input-container">
                    <input type="text" name = "name" placeholder = "Nombre" value = "<?= isset($_POST['name']) ? $name : '';?>">
                    <label for="name">Nombre</label>
                </div>
                <div class="input-container">
                    <input type="text" name = "surname" placeholder = "Apellido" value = "<?= isset($_POST['surname']) ? $surname : '';?>">
                    <label for="surname">Apellido</label>
                </div>
                <div class="input-container">
                    <div class="select-container">
                        <select name="age_compare" id="">
                            <option value="1">Mayor que</option>
                            <option value="2">Menor que</option>
                            <option value="3">Igual que</option>
                        </select>
                    </div>
                    <input type="text" name = "age" placeholder = "Edad" value = "<?= isset($_POST['age']) ? $age : '';?>">
                    <label for="age">Edad</label>
                </div>
                <div class="select-container">
                    <select name="countries[]" id="" multiple>
                        <?php
                        if(count($arrayCountries) > 0){
                            foreach($arrayCountries as $index => $country){
                                echo "<option value = '$index'>"  . $arrayCountries[$index] . '</option>';
                            }
                        }
                        ?>
                    </select>
                    <span class="focus"></span>
                </div>

                <div class="submit">
                    <input type="submit" value="Buscar" name = "search">
                </div>
            </form>
        </div>
        <div class="container-back">
            <button class="back" id = "back">Volver</button>
        </div>

        <div class="result-container">
            <?php
            if(count($error) == 0){
                echo showTable($result);
            } else {
            ?>
            <div class="error-container">
                <i class="fa fa-times-circle"></i>
                <span>
                <?php
                foreach($error as $err){
                    echo "$err<br>";
                }
                ?>
                </span>
            </div>
            <?php
            }
            ?>
        </div>
    </main>
    <script src="../js/show.js"></script>
</body>
</html>