<?php
    $url = "https://www.example.com/index.php";
    $archivoConExtension = substr($url, strripos($url,"/")+1); // Devuelve index.php
    $archivoSinExtension = substr($archivoConExtension, 0, strripos($archivoConExtension,"."));

    echo "El fichero sin extensión es '$archivoSinExtension'";
?>