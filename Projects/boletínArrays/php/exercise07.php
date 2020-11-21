<table>
    <tr>
        <th>id</th>
        <th>country</th>
        <th>firstName</th>
        <th>surname</th>
        <th>age</th>
    </tr>
    <?php
        /* MEJORAR */
        foreach($arrayPersonas as $key => $value){
            $aux[$key] = $value['country'];
        }

        array_multisort($aux, SORT_DESC, $arrayPersonas);

        for($j = 0; $j < sizeof($arrayPersonas); $j++){
            if($arrayPersonas[$j]['age'] >= 18){
                echo "<tr>";
                echo "  <td>" . $arrayPersonas[$j]["id"] . "</td>";
                echo "  <td>" . $arrayPersonas[$j]["country"] . "</td>";
                echo "  <td>" . $arrayPersonas[$j]["firstname"] . "</td>";
                echo "  <td>" . $arrayPersonas[$j]["surname"] . "</td>";
                echo "  <td>" . $arrayPersonas[$j]["age"] . "</td>";
                echo "</tr>";
            }
        }
    ?>
</table>