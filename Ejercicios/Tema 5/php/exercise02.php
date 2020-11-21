<?php
    $capitales = array ("espana" => "madrid",
        "francia"=> "paris",
        "escocia" => "edimburgo",
        "Gales" => "Cardiff"
    );

    foreach($capitales as $pais => $capital){
        echo "<p>El pais/nación " . ucfirst($pais) . " tiene como <b>" . ucfirst($capital) . " </b>.</p>";
    }
?>