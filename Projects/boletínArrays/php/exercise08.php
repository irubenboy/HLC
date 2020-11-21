<table>
    <tr>
        <th>id</th>
        <th>country</th>
        <th>firstName</th>
        <th>surname</th>
        <th>age</th>
    </tr>
    <?php
       for($j = 0; $j < sizeof($arrayPersonas); $j++){
           if($arrayPersonas[$j]['age'] >= $arrayRandom['age']){
               for($z = 0; $z < sizeof($arrayRandom['countries']); $z++){
                   if($arrayPersonas[$j]['country'] == $arrayRandom['countries'][$z]){
                        echo "<tr>";
                        echo "  <td>" . $arrayPersonas[$j]["id"] . "</td>";
                        echo "  <td>" . $arrayPersonas[$j]["country"] . "</td>";
                        echo "  <td>" . $arrayPersonas[$j]["firstname"] . "</td>";
                        echo "  <td>" . $arrayPersonas[$j]["surname"] . "</td>";
                        echo "  <td>" . $arrayPersonas[$j]["age"] . "</td>";
                        echo "</tr>";
                   }
               }
           }
       }
    ?>
</table>