<?php
    define('NOMBRE', "Arrays");
    define('MAX_EXERCISES', 8);
    $enunciados = array(
        "Dado el array anterior crear un fichero PHP que se llame ejercicio_1.php cuyo objetivo es mostrar una tabla (HTML) que contenga la información contenida en el array, es decir la tabla contendrá cinco columnas, \"id\", \"country\", \"firstname\", \"surname\", \"age\".",
        "Devolver las personas de mayor y menor edad e incluirlas en una tabla con el formato explicado en el ejercicio anterior. (El fichero de este ejercico se debe llamar ejercicio_2.php).",
        "Crear un fichero que devuelva solo las personas que pertenecen al pais con código 3 en formato tabla HTML como se definió en el ejercicio 1. (ejercicio_3.php)",
        "Dado el siguiente array.
        \$arrayCountries = array(0 => \"Wales\", 1 => \"USA\", 2 => \"Ireland\", 3 => \"Scotland\", 4 => \"Australia\" , 5 => \"England\")
        <br>Mostrar una tabla HTML con el formato del primer ejercicio en el que la columna country, en lugar de contener sú código numérico contenga el nombre del pais.",
        "Devolver una tabla HTML (mismo formato que ejercicio 1), donde las personas aparezcan ordenadas de manera ascendente por edad. En caso de que dos individuos tengan la misma edad se considerará menor aquel cuyo código de país sea menor y en el caso de igualdad la siguiente condición sería nombre y después apellido y si todas las condiciones son igual pues el que esté en una posición menor en el array.",
        "Devolver en una tabla (formato ejercicio 1) con las 5 personas más jovenes.",
        "Devolver en una tabla (formato ejercicio 1) la personas de mayor edad de cada uno de los paises, en el caso de haber más de uno pues mostrarlos. Las personas deben aparecer ordenadas por codigo de pais descendentemente.",
        " Dado un array que se encuentra en otro fichero (arrayRandom.php) y del que no sabemos sus valores pero si su estructura devolver una tabla con las personas mayores a la edad dada y de los paises contenidos en el array, ordenadas por su ID. Ejemplo de posible contenido del fichero
            <br> \$arrayRandom = array(\"countries\" => array(1, 3, 5),
                             \"age\" => 40);
        <br>Aclaración, podeis crear vosotros mismos un fichero arrayRandom.php con los datos del array anterior e incluirlo en vuestro fichero a través de include para su uso."
    );

    include('ejercicioPHP.php');
    include('arrayRandom.php');
?>