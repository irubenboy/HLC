<?php
    define('NOMBRE', "Formularios");
    define('MAX_EXERCISES', 5);
    $enunciados = array(
        "Crear un formulario que contenga un input de entrada donde el usuario podrá introducir el nombre de la persona a buscar. Siendo el resultado a mostrar una tabla (con el mismo formato que en todos los boletines anteriores) con las personas que tengan ese nombre. Por Ejemplo si introducimos \"Kyle\" nos devolverá todas aquellas personas que se llamen \"Kyle\". La búsqueda debe ser estricta y no sensible a mayúsculas/minúsculas. <br>
        El fichero que contine el formulario se ha de llamar search.html y su action searchController.php
        <br>Añadir al formulario un input con el Apellido.
        <br>Añadir al formulario un input con la edad.
        <br>Añadir un select con los paises que se pasan a través de \$arrayCountries.
        <br>Añadir al select anterior un valor que sea \"Todos los paises\"
        <br>Añadir un select que estará ligado al input \"EDAD\" con los siguiente valores
        \"Mayor igual\", \"Menor igual\" o \"igual\" por lo que si el usario selecciona \"Mayor igual\" y en el input
        edad introduce 30 tendrá que devolver las personas mayores o iguales a 30.
        <br>Mostar un mensaje de error si el usuario introduce válores NO númericos en el campo EDAD y si no rellena el campo NOMBRE.",
        "Cambiar el select de paises por checkboxes.
        El fichero que contine el formulario se ha de llamar search_2.html y su action searchController_2.php",
        "Cambiar el select de paises por radio button. El fichero que contine el formulario se ha de llamar search_3.html y su action searchController_3.php",
        " Cambiar de nuevo el campo \"PAIS\" a un select y permitir seleccionar más de un pais. El fichero que contine el formulario se ha de llamar search_4.html y su action searchController_4.php",
        "Añadir la funcionalidad necesaria para que la búsqueda por nombre no sea estricta, es decir si queremos buscar \"k\" me devolerá todos aquellos nombres que empiezan por k. Si quiero buscar \"ky\" pues me devolverá todos los nombres que empiecen por ky. El fichero que contine el formulario se ha de llamar search_5.html y su action searchController_5.php"

    );

    include('ejercicioPHP_formulario.php');
?>