<?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
    echo "El archivo se ha subido con éxito <br>";
    if($_FILES['archivo']['size'] < (512*1024)){
        echo "El archivo no sobrepasa el tamaño máximo: 512KB";
        if($_FILES['archivo']['type'] == "image/jpeg"){
            echo "La extensión JPG está perminita <br>";

            $rand = rand(1000,999999);
            $origen = $_FILES['archivo']['tmp_name'];
            $destino = 'uploads/'.$rand.$_FILES['archivo']['name'];
            $success = move_uploaded_file($origen, $destino);
            $archivo = $rand.$_FILES['archivo']['name'];
            if($success){
                echo "<a href='descargar.php?archivo=$archivo' >Descargar imagen</a>";
            } else {
                echo "No subida correctamente <br>";
            }
        } else {
            echo "Extensión no permitida <br>";
        }
    } else {
        echo "El archivo sobrepasa el tamaño máximo: 512KB";
    }    
} else {
    echo "El archivo no se ha subido con éxtio <br>";
}

?>