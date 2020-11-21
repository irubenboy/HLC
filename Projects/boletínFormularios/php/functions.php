<?php
    function showTable(Array $array){
        if(count($array) > 0){
            $table = "<table>\n<tr>\n";
            foreach($array[0] as $key => $value){
                $table .= "<th>" . $key . "</th>";
            }

            $table .= "</tr>";
            foreach($array as $key => $value){
                $table .= "<tr>\n";
                    foreach($array[$key] as $k => $v){
                        $table .= "<td>" . $array[$key][$k] . "</td>";
                    }
                $table .= "</tr>\n";
            }

            $table .= "</table>";
        } else {
            $table = "<span class = 'empty'>No hay datos en la tabla</span>";
        }
        return $table;
    }

    function print_array($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
?>