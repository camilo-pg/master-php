<?php

//Con GET los parametros se ven en la url de la web no es seguro.
//POr eso usamos el metodo POST que es mas seguro.
//$_GET['nombre'];
//$_GET['apellido'];

$name =  $_POST['nombre'];
$lastname = $_POST['apellido'];

echo '<h2/>'.$name.'<h2/><br/>';
echo '<h2/>'.$lastname.'<h2/>';

?>