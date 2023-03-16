<?php
/** Funciones: Conjuntos de Ordenes bajo un nombre 
 *  que se puede utilizar repetidamente sin necesidad de repetir codigo.
 */

 //Ejemplo 
 function muestraNombres(){
    echo 'Camilo <br/>';
    echo 'Petrignani <br/>';
    echo 'Gorla <hr/>';
 }

 //Ejemplo 2

function tabla($numero){
    echo 'tabla de * del '.$numero.'<br/>';
    for ($i=1; $i<=10; $i++){
        
        echo "$numero * $i = ".$numero*$i.'<br/>';
    }
}

 //Invocar función
 muestraNombres();
 if ( isset($_GET['numero'])){
    tabla($_GET['numero']);
    echo '<hr/>';
 }else{
    echo 'Inserte unn valor en la variable numero';
 }

 //Ejemplo 3
 function calculadora($num1, $num2,$color = false){
    
    if ($color){
        echo '<h1>';
        echo "Calculadora de $num1 y $num2 <br/>";
        echo "Suma: ".$num1+$num2.'<br/>';
        echo "Resta: ".$num1-$num2.'<br/>';
        echo "Producto: ".$num1*$num2.'<br/>';
        echo "Division: ".$num1/$num2.'<br/>';
        echo '</h1>';
    } else{
        echo "Calculadora de $num1 y $num2 <br/>";
        echo "Suma: ".$num1+$num2.'<br/>';
        echo "Resta: ".$num1-$num2.'<br/>';
        echo "Producto: ".$num1*$num2.'<br/>';
        echo "Division: ".$num1/$num2.'<br/>';
    }
 }
 calculadora(10,20);

 //Ejemplo 4
 function miNombre(){
    return 'Camilo '.miApellido();
 }
 echo '<hr/>'.miNombre();

 //Ejemplo 5
 function miApellido(){
    return 'Petrignani Gorla';
 }



?>