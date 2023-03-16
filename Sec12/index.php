<?php

/** BUCLES
 * 
 * WHILE: Estrctura de control que itera la ejecución hasta que se
 * cumple una condición.
 * 
 */
$numero = 1;
    while ($numero <= 5) {
        echo 'hola mi valor es : '.$numero.'<br/>';
        $numero++;
    }

// Do While
$edad = 25;
do {
    echo 'Mi edad es: '.$edad.'<br>';
    $edad++;
} while ($edad < 30);


//For
for ($i=0; $i < 5 ; $i++) { 
    echo 'el valor de i es: '.$i.'<br/>';
}
?>