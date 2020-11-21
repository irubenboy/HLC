<?php
    define('NOMBRE', "Cadenas");
    define('MAX_EXERCISES', 20);
    $enunciados = array(
        "Escribe un script PHP para:
        <br>a) transforma un cadena con todas sus letras en mayúsculas.
        <br>b) transforma un cadena con todas sus letras en minúsuclas.
        <br>c) primera letra de la cadena en mayúsculas.
        <br>d) primera letra de cada palabra de mi cadena en mayúsculas.
        <br>La cadena a transformar es: \"En un lugar de la mancha de cuyo nombre\"",
        "Escribe un script PHP para dividir la siguiente cadea:
        <br>Cadena de entrada: '082307'
        <br>Salida esperada : 08:23:07",
        "Escribe un script PHP que compruebe si la cadena indicada contiene la palabra \"cuyo\"
        <br>cadena : 'En un lugar de la mancha de cuyo nombre.'
        <br>palabra a buscar: \"cuyo\".",
        "Escribe un script PHP para extraer el nombre del fichero de la siguiente url:
        <br>cadena : 'www.example.com/public_html/index.php'
        <br>Valor esperado(fichero) : 'index.php'",
        "Escribe un script PHP que extraiga el nombre de usuario del siguiente email.
        <br>Cadena de ejemplo : 'rayy@example.com'
        <br>Valor esperado : 'rayy'",
        "Escribe un script PHP que obtenga los tres últimos caracteres de una cadena.
        <br>Cadena de ejemplo : 'rayy@example.com'
        <br>Valor esperado : 'com'",
        "Escribe un script PHP que genere una contraseña aleatoria desde la siguiente cadena (no usar la
        función random):
        <br>Cadena de ejemplo : '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz'
        <br>Nota : La longitud de la contraseña puede ser de 6, 7, 8 etc.",
        "Escribe un script PHP que remplace la palabra \"lugar\" por \"planeta\"
        <br>Cadena de ejemplo : 'En un lugar de la mancha de cuyo nombre.'
        <br>Resultado esperado : En un planeta de la mancha de cuyo nombre..",
        "Escribe un script PHP que encuentre el primer caracter diferente comparando dos cadenas.
        <br>cadena1 : 'football'
        <br>cadena2 : 'footboll'
        <br>Resultado esperado : La primera diferencia entre las dos cadenas está en la posición 5: \"a\" <> \"o\"",
        "Escribe un script PHP que separe una cadena y su resultado sea un array.
        <br> Cadena de ejemplos : \"Uno, dos, tres, cuatro\";
        <br> Resultado esperado : [\"Uno\", \"dos\", \"tres\", \"cuatro\"]",
        "Escribe un script PHP que obtenga de una URL el nombre del fichero sin extensión.
        <br>URL de ejemplo : \"https://www.example.com/index.php\"
        <br>Valor esperado : 'index'",
        "Escribe un script PHP que imprima el siguiente caracter de un caracter dado.
        <br>Caracter de ejemplo : 'a'
        <br>Valor esperado : 'b'
        <br>Caracter de ejemplo : 'z'
        <br>Valor esperado : 'a'",
        "Escribe un script PHP que inserte en una especificada posición una cadena dada.
        <br>Original cadena : 'En un lugar de la mancha de cuyo nombre'
        <br>Insertar 'test' entre 'la' y 'mancha'.
        <br>Valor esperado : 'En un lugar de la test mancha de cuyo nombre'",
        "Escribe un script PHP que devuelva la primera palabra de una frase.
        <br>Original cadena : 'En un lugar de la mancha de cuyo nombre'
        <br>Valor esperado : 'En'",
        "Escribe un script PHP que elimine todos los ceros a la izquierda de una cadena
        <br>Original cadena : '000547023.24'
        <br>Valor esperado : '547023.24'",
        "Escribe un script PHP que borre una parte de una cadena
        <br>Original cadena : 'En un lugar de la mancha de cuyo nombre'
        <br>Borrar 'mancha' de la anterior cadena.
        <br>Valor esperado : 'En un lugar de la de cuyo nombre'",
        "Escribe un script PHP que borre todas las apariciones del caracter \"/\" de una cadena
        <br>Original cadena : 'En un  / lugar de  / la mancha de / cuyo nombre'
        <br>Valor esperado : 'En un lugar de la mancha de cuyo nombre'",
        "Escribe un script PHP que devuelva los caracteres después del último \"/\" de una URL
        <br>Ejemplo de URL : 'http://www.example.com/5478631'
        <br>Valor esperado : '5478631'",
        "Escribe un script PHP que seleccione las primera cinco palabras.
        <br>Cadena de ejemplo : 'En un lugar de la de cuyo nombre'
        <br>Valor esperado : 'En un lugar de la'",
        "Escribe un script PHP que borre la(s) comas(s) de la siguiente cadena
        <br>Cadena de ejemplo : '2,543.12'
        <br>Valor esperado : 2543.12
        <br>Cadena de ejemplo : '345,102,543.12'
        <br>Valor esperado : 3451022543.12"
    );
?>