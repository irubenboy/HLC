<table>
    <tr>
        <th>id</th>
        <th>country</th>
        <th>firstName</th>
        <th>surname</th>
        <th>age</th>
    </tr>
<?php
    foreach($arrayPersonas as $key => $row){
        $aux[$key] = $row['age'];
        $aux2[$key] = $row['country'];
        $aux3[$key] = $row['firstname'];
        $aux4[$key] = $row['surname'];
    }
    array_multisort($aux, SORT_ASC, $aux2, SORT_ASC, $aux3, SORT_ASC, $aux4, 
        SORT_ASC, $arrayPersonas);

    for($j = 0; $j < sizeof($arrayPersonas); $j++){
        echo "<tr>";
        echo "  <td>" . $arrayPersonas[$j]["id"] . "</td>";
        echo "  <td>" . $arrayPersonas[$j]["country"] . "</td>";
        echo "  <td>" . $arrayPersonas[$j]["firstname"] . "</td>";
        echo "  <td>" . $arrayPersonas[$j]["surname"] . "</td>";
        echo "  <td>" . $arrayPersonas[$j]["age"] . "</td>";
        echo "</tr>";
    }
?>
</table>