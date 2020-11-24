<?php

  echo "<pre>";
  print_r($_FILES);

/*Accedemos al tipo del archivo subido */
  echo "El tipo es ";
  echo $_FILES['archivo']['type'];
  echo "</pre>";
  //1. Comprobamos que se ha subido al servidor:
    //Primer índice es el "name" del input "file"
    //El segundo tiene que ser siempre "tmp_name"
  if (is_uploaded_file($_FILES['archivo']['tmp_name'])){
    
    //$_FILES['archivo']['size'] devuelve byte por eso la conversión
    if($_FILES['archivo']['size']<(20*1024*1024)){//1024byte=1Kb, 1024K=1MB
      echo 'El archivo no sobrepasa el tamaño máximo: 20MB<br />';
      if($_FILES['archivo']['type'] == "image/jpeg"){
        echo "La extensión JPEG es permitida<br />";

   //2. Movemos el archivo //
        $rand = rand(1000,999999);
        $origen = $_FILES['archivo']['tmp_name'];
        $destino = 'uploads/'.$rand.$_FILES['archivo']['name'];
        move_uploaded_file($origen, $destino);
   //3. Descargamos el archivo:
        $archivo = $rand.$_FILES['archivo']['name'];
        print('<a href="descargar.php?archivo='.$archivo.'" >Descargar PNG</a>');

      }else{
        echo "El tipo del fichero NO es permitido";
      }
    }else{
      echo 'El archivo sobrepasa el tamaño máximo: 512Mb<br />';
    }

  }else{
    echo "NO se ha subido el fichero";
  }



?>
