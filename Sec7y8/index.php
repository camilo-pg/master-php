<?php

$variable = "Hola Mundo desde variable de PHP";

//Una variable es un contenedor de información para guardar datos dentro de ella 
echo '<h1>'.$variable.'</h1>';

/* Tipos de datos   
 *Entero: (int/Integer);
 * coma flotante / decimales (float/double)
 * Cadenas (String)
 * Bolleanos (bool) 1 es verdadero y 0 falso
 * null
 * Array (coleecion de datos)
 * Objetos
 */

 $numero = 44;
 echo  "La var contiene: ".gettype($numero)."\n" ;

 //var_dump te retorna información sobre la variable que le pasas como parametro.
 // \m hace un salto de línea y \t hace una tabulación 
 $nombre = "\"Camilo \n \tPetrignani \n Gorla\"";
 echo $nombre;

 
 
 //Constantes: contenedor de información que nunca cambia
 define('nombre','Camilo Petrignani Gorla');
 echo '<hr/>'.nombre;

 //Constantes predefinidas
 echo '<br/>'.PHP_OS;

?>