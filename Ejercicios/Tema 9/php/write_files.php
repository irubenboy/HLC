<?php
    $date = date('d-m-y h:i:s');

    if(count($files) > 0){
        $content = (isset($_POST['content']) ? $_POST['content'] :"El usuario no ha escrito nada") . " (Modificado: $date)\n";
        for($j = 0; $j < count($files); $j++){
            $f = fopen('../uploads/'.$files[$j], 'a+', true); // abrimos el fichero
            if(!$f){ // si no se ha podido abrir, añadimos el error
                array_push($errors, "El fichero " . ($j + 1) . " -> " . ERRNO_5);
            } else { // si se ha podido abrir
                $write = fwrite($f, $content, strlen($content)); // escribimos en el fichero
                if($write > 0){
                    array_push($rights, "El fichero " . ($j + 1) . " -> " . RIGNO_2);
                } else {
                    array_push($rights, "El fichero " . ($j + 1) . " -> " . ERRNO_6);
                }
            }

        }
    }
?>