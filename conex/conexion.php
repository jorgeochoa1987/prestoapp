<?php

$conexion = new mysqli("localhost", "root", "", "u465803286_prestoapp");

 if($conexion === false) { 
    echo 'Ha habido un error <br>'.mysqli_connect_error(); 
   } else {

echo 'Recuerde cambiarme Conectado a la base de datos';
$host= $_SERVER["HTTP_HOST"];
echo $host;
   } 


?>
