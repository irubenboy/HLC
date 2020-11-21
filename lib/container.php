<?php
    function show_dir($ruta){
        $dir = opendir("$ruta");

        while(($archivo = readdir($dir)) != false){
            if($archivo != "." && $archivo != ".."){
                if(is_dir($archivo)){
                    echo "<div type = '$archivo' class='subdirectory'>
                        <span>$archivo</span>
                    </div>";
                }
            }
        }
    }

    function show_files($ruta){
        $dir = opendir("$ruta");

        while(($archivo = readdir($dir)) != false){
            if($archivo != "." && $archivo != ".."){
                if(!is_dir($archivo)){
                    echo "<div type = '$archivo' class='subdirectory'>
                        <span>$archivo</span>
                    </div>";
                }
            }
        }
    }

?>