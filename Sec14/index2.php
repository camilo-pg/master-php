<?php

/**
 * Variables Locales: Se declaran dentro de una funcion y solo se pueden utilizar dentro de ella
 * a no ser que haga un return.
 * 
 * Variables Globales: Se declaran fuera de una funcion y estan disponibles en todo momento.
 */

 
$frase = "¿Conoces a Marcelo?";

 function holamundo(){
    global $frase;
    $año = 2023;

    echo 'sf'.$frase;

    return $año;

 }

echo 'pf'.$frase.' '.$año;

 echo '<br/>'.holamundo();


?>