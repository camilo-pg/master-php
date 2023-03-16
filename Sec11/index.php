<?php

/**Comparación
 * == igual
 * === identico
 * != distinto
 * < menor que
 * > mayor que
 * 
 * 
 * Logicos
 * && AND
 * || OR
 * ! NOT
 * 
 * Condicionales
 */
$color = 'azul';

if ($color == 'rojo') {
    echo 'El color es rojo<br/>';
}else {
    echo 'El color no es rojo<br/>';
}

if ($color == 'azul' || $color  == 'verde'){
    goto verazul;
}

// switch
$dia = 5;
switch ($dia) {
    case 1:
        echo 'lunes';
        break;
    case 2:
        echo 'martes';
        break;
    case 5:
        echo 'comienza el finde';
        break;
    default:
        echo 'miercoles o jueves';
        break;
}

verazul:
echo 'el color es azul o verde';

?>