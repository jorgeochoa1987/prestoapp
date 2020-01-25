<?php
require('../../conex/conexion.php');
if (isset($_POST['save'])) {
    $value = $_POST['value'];
    $interes = $_POST['interes'];
    $cartera = $_POST['cartera'];
    $cliente = $_POST['cliente'];
    $date = $_POST['date'];
    $notas = $_POST['notas'];

    if($value=='' )
    {
      $Respuesta =  "Es obligatorio tener un valor" ;
      echo $Respuesta;      exit();
    }
  	$sql = "INSERT INTO `cuenta` (`id`, `id_cliente`, `id_prestamista`, `prestamo`, `fecha_prestamo`, `interes`, `fechaVisita1`) VALUES (NULL, '$cliente ', '$cartera', '$value', current_timestamp(), '$interes', '$date');";
  	if (mysqli_query($conexion, $sql)) {
  	  $id = mysqli_insert_id($conexion);
    
        echo'Creado la cartera de "'.$cliente.'" valor por:"'.$date.'" ';
        

  	}else {
      $Respuesta =  "Error: ". mysqli_error($conexion); ;
      echo $Respuesta;
  	  
  	}
  	exit();
  }
  ?>