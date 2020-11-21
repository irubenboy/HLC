<?php
    $array = ["Esto es una cadena", 234, false, 34.05, 'c'];

    foreach($array as $a){
        echo "<p>" . var_dump($a) . "</p>";
    }
?>