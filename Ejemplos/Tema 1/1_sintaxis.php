<?php if($loquesea){ ?>
     <h1>HOLA</h1>
 <?php }else{ ?> 
     <h1>Adios</h1>
 <?php } ?>

//es lo mismo
 <?php if($loquesea){ 
     echo "<h1>HOLA</h1>";
 }else{ 
     echo "<h1>Adios</h1>";
 } 
 ?>