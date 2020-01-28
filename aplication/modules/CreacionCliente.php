<?php
require('../../conex/conexion.php');
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $image =$_POST['image'];
    $lastname = $_POST['lastname'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $notes = $_POST['notes'];

    if($number=='' or $name =='')
    {
      echo "Es Obligatorio llenar la cedula y nombre" ;
      exit();
    }
  	$sql = "INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `cedula`, `correo`, `telefono`, `ciudad`, `direccion`, `notas`, `foto`)  VALUES (NULL, '$name', '$lastname', '$number', '$email', '$phone', '$city', ' $address', '$notes','$image');";
  	if (mysqli_query($conexion, $sql)) {
  	  $id = mysqli_insert_id($conexion);
    
     
        $sql2 = "INSERT INTO `dias` (`id`, `id_cliente`, `lunes`, `martes`, `miercoles`, `jueves`, `viernes`, `sabado`, `domingo`) VALUES (NULL, '$number', '$category1', '$category2', '$category3', '$category4', '$category5', '$category6', '$category7');";
        if (mysqli_query($conexion, $sql2)) {
          $id = mysqli_insert_id($conexion);
        }
        
        $Respuesta ="Creado el $name";
        echo $Respuesta;
        

  	}else {
  	  echo "Error: ". mysqli_error($conexion);
  	}
  	exit();
  }
  ?>