<?php
//Ejercicio 1: Crear 2 variables pais y continente y mostrar su valor por pantalla
 echo 'Ejercicio 1 <br/>';
$pais = 'Argentina';
$continente = 'America';

echo 'Vivo en el pais: '.$pais;
echo '<br/>Que se encuentra en el continente: '.$continente.'<hr/>';


//Ejercicio 2: Mostrar por pantalla todos los numeros pares que hay del 1 al 100
echo 'Ejercicio 2<br/>';
for ($i=1; $i<=100; $i++){
    if ( $i % 2 == 0 ){
        echo 'El número '.$i.' es par<br/>';
    }
}

//Ejercicio 3: imprimir por pantalla los cuadrados (un numero multiplicado por si mismo) de los primeros 40 numeros naturales.
echo '<hr/> Ejercicio 3 <br/>';
$contador = 1;
while ($contador <= 40){
    echo 'El cuadrado es: '.$contador * $contador.'<br/>';
    $contador++;
}

//Ejercicio 4: Recoger dos numeros por la url y hacer todas las operacions de una calculadora
echo '<hr/> Ejercicio 4 <br/>';
if (isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo 'Suma: '. $numero1+$numero2.'<br/>';
    echo 'Resta: '. $numero1-$numero2.'<br/>';
    echo 'Multiplicacion: '. $numero1*$numero2.'<br/>';
    echo 'Division: '. $numero1/$numero2.'<br/>';
}else{
    echo 'Falta pasar por lo menos un número.';
}

echo 'modificado';



?>