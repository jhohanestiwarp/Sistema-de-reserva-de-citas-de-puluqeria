<?php


  //$conexion=new mysqli("localhost","root","","proyecto") //crea la conexion a la base de datos
  //or die("not connected".mysqli_connect_error()); // si no se puede conetar manda un error da un mensaje



   include 'bd.php';
  //recibir los datos por post
  if(isset($_POST['id_reserva'])){

  $id_reserva = $_POST['id_reserva'];   
  $nombre = $_POST['nombre'];
  $celular= $_POST['celular'];
  $fecha= $_POST['fecha'];
  $hora_inicio = $_POST['hora_inicio'];
  $hora_fin = $_POST['hora_fin'];
  $id_servicio_fk = $_POST['id_servicio_fk'];


  

    $sql="INSERT INTO `reserva`(`id_reserva`,`nombre`, `celular`, `fecha`, `hora_inicio`, `hora_fin`, `id_servicio_fk`) 
    VALUES ('$id_reserva','$nombre','$celular','$fecha','$hora_inicio','$hora_fin','$id_servicio_fk');";//hace la consulta a la base datos
    $query=mysqli_query($conn,$sql); // ejecuta la consulta, pasa conexion y base de datos
    if($query){    //revisa si hay resultado 
      echo"1 Registro se guardo, Regrese y dele Enviar a WhatsApp";
      mysqli_close($conn);
    }else{
      echo mysqli_error($conexion);    
    }
  
  }


  


?>