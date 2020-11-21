<table>
    <tr>
        <th>id</th>
        <th>country</th>
        <th>firstName</th>
        <th>surname</th>
        <th>age</th>
    </tr>
    <?php
    $minEdad = 99999999;
    $z = 0;
    for($j = 0; $j < sizeof($arrayPersonas); $j++){
        if($arrayPersonas[$j]['age'] <= $minEdad){
            $minEdad = $arrayPersonas[$j]['age'];
        }
    }

    for($j = 0; $j < sizeof($arrayPersonas); $j++){
        if($arrayPersonas[$j]['age'] >= $minEdad && $z < 5){
            echo "<tr>";
            echo "  <td>" . $arrayPersonas[$j]["id"] . "</td>";
            echo "  <td>" . $arrayPersonas[$j]["country"] . "</td>";
            echo "  <td>" . $arrayPersonas[$j]["firstname"] . "</td>";
            echo "  <td>" . $arrayPersonas[$j]["surname"] . "</td>";
            echo "  <td>" . $arrayPersonas[$j]["age"] . "</td>";
            echo "</tr>";
        }
        $z++;
    }
    ?>
</table>