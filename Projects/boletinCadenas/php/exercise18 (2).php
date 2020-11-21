<?php
    $url =  'http://www.example.com/5478631';
    $cadFinal = substr($url, strripos($url, '/')+1);

    echo "La parte final de la '$url' es '$cadFinal'";
?>