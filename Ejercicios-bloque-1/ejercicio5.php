<?php
//Ejercicio 5: Mostrar por pantalla todos los numeros entre dos numeros pasados por la URL
echo 'Ejercicio 5 <br/>';
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

for ($x=$numero1+1; $x < $numero2; $x++){
    echo $x;
}

//Ejercicio 6: Mostrar una tabla con  las tablas de multiplicar del 1 al 10
echo '<hr/> Ejercicio 6 <br/> ';

echo "<table border='1'>"; //inicio tabla   
    echo '<tr>'; //inicio fila 1
        for ($i=1; $i<=10; $i++){
            echo '<td>Tabla del '.$i.'</td>';
        }
    echo '</tr>'; //cierre fila 1
    
    echo '<tr>'; //inicio fila 2
        for ($j=1; $j<=10; $j++){
            echo '<td>';
            for ($z=1; $z<=10 ; $z++) { 
                echo $j.' * '.$z.' = '.$j*$z.'<br/>';
            }
            echo '</td>';
        }
    echo '</tr>'; //fin fila 2
echo "</table>"; //fin de la tabla


//Ejercicio7: De los numeros pasados en el ej 5 que solo muestre los impares
echo '<hr/> Ejercicio 7 <br/>';

for ($x=$numero1+1; $x < $numero2; $x++){
    if ( $x % 2 != 0){
        echo $x;
    }
} 


?>