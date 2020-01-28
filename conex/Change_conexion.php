<?php

$conexion = new mysqli("localhost", "u492238651_prestoapp", "Veu[N+=K", "u492238651_prestoapp");

 if($conexion === false) { 
    echo 'Ha habido un error <br>'.mysqli_connect_error(); 
   } else {

echo 'Conectado a la base de datos';
    
   } 


?>


<?php
phpinfo();
?>