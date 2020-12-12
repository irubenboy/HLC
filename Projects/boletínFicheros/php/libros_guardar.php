<?php

$errors = [];
$rights = [];
if(isset($_POST['save'])){ // se comprueba si se le ha dado al botón de enviar
    if(isset($_POST['title']) && isset($_POST['type'])){
        $title = $_POST['title'];
        $type = $_POST['type'];
        $obs = $_POST['observations'];
        if(empty($title)){ // comprueba si está vacío
            array_push($errors, "ERRNO_1");
        } else {
            $isOpen = @fopen('../files/libros.txt', 'a+b', true); // intenta abrrir el ficherp

            if(!$isOpen){ // si no abre el fichero muestra un error
                array_push($errors, "ERRNO_2");
            }

            $cadena =  "Título: $title<br>Tipo: " . ($type == 1 ? "Ejemplar" : "Colección") . "<br>Observaciones<br>$obs\n" . "-------------------------------------------------\n";

            $isWrite = fwrite($isOpen, $cadena, strlen($cadena)); // escribe el fichero

            if(!$isWrite){
                array_push($errors, "ERRNO_3");
            } else {
                array_push($rights, "RIGNO_1");
            }
            fclose($isOpen); // cierra fichero
        } 
    } else {
        array_push($errors, "ERRNO_4");
    }

    if(count($errors) > 0 && count($rights) > 0){
        $error = implode($errors, ",");
        $right = implode($rights, ",");

        header("location: ../index.php?err=$error&rgh=$right");
    } else if(count($errors) > 0 && count($rights) == 0){
        $error = implode($errors, ",");

        header("location: ../index.php?err=$error");
    } else if(count($errors) == 0 && count($rights) > 0){
        $right = implode($rights, ",");

        header("location: ../index.php?rgh=$right");
    }
}
?>