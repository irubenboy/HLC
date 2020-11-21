<?php
include('lib/functions.php');
include('const.php');

$rights = array(); // se almacena las acciones correctas
$errors = array(); // se almacena los fallo
$files = array(); // array que contendra la ruta de los ficheros subidos

// print_array($_FILES);
if(isset($_FILES['files'])){
    // Se recorre el array $_FILES['files'] para subir cada uno de los archivos
    for($i = 0; $i < count($_FILES['files']['name']); $i++){
        if(is_uploaded_file($_FILES['files']['tmp_name'][$i])){ // Si el archvio se ha subido correctamente 
            if($_FILES['files']['size'][$i] < (512*1024)){ // si el tamaño es menor que el indicado
                if($_FILES['files']['type'][$i] == "text/plain"){ // y si de tipo texto plano
                    $date = date('Y-m-d_h-i-s'); //establece la fecha actual
                    $extension = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION); // obtiene la extensión
                    $name = 'file'.'_'.$date.$i.'.'.$extension; ; // establece el nombre del fichero
                    $origin = $_FILES['files']['tmp_name'][$i];  // establece el origen
                    $destiny = '../uploads/'.$name; // establece el destino
                    $success = move_uploaded_file($origin, $destiny); // intenta mover el fichero
                    if($success){ // si se mueve con éxito
                        array_push($rights, "El fichero " . ($i+1) . " -> " . RIGNO_1);
                        array_push($files, $name); // inserta el destino en el array
                    } else {
                        array_push($errors, "El fichero " . ($i+1) . " -> " . ERRNO_1);
                    }
                } else {
                    array_push($errors, "El fichero " . ($i+1) . " -> " . ERRNO_2);
                }
            } else {
                array_push($errors, "El fichero " . ($i+1) . " -> " . ERRNO_3);
            }    
        } else {
            array_push($errors, "El fichero " . ($i+1) . " -> " . ERRNO_4);
        }
    }
    // print_array($errors);
    // print_array($rights);
} else {
    header('location: ../index.php');
}


?>