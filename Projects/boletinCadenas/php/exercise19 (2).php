<?php
    $cad = 'En un lugar de la mancha cuyo nombre';
    $arrayCad = explode(' ', $cad);
    $cadFinal = '';

    for($j = 0; $j < 5; $j++){
        $cadFinal .= $arrayCad[$j] . " ";
    }

    $cadFinal = trim($cadFinal);

    echo "'$cadFinal'";
?>