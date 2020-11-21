<?php
    $cad1 = "football";
    $cad2 = "footboll";
    $bool = false;

    for($j = 0; $j < strlen($cad1) && $j < strlen($cad2); $j++){
        if($cad1[$j] != $cad2[$j]){
            echo "La primera diferencia entre ambas cadenas está en la posición $j: \""
            . $cad1[$j] . "\" <> \"" . $cad2[$j] . "\"";
            $bool = true;
        }
    }

    if(!$bool){
        if(strlen($cad1) > strlen($cad2)){
            echo "La primera diferencia entre ambas cadenas está en la posición "
            . strlen($cad1);
        } else if(strlen($cad2) > strlen($cad1)){
            echo "La primera diferencia entre ambas cadenas está en la posición "
            . strlen($cad2);
        } else {
            echo "Ambas cadenas son iguales";
        }
    }
?>