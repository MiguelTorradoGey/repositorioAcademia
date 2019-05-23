<?php
  $id = $_GET['id'];

  echo "<script type='text/javascript'>confirm('¿Borrar?')</script>";

  if($strconfirm==false){
    $sql = "delete from clientes where id = $id";
    include "conexion.php";
  // preparamos la consulta
    $consulta = $conexion->prepare($sql);
  // ejecutamos la consulta
    if ($consulta->execute())
       {
         header('Location: clientes.php');
       } else {
         echo "error";
       } // Fin de if consulta
   } else {
     header('Location: clientes.php');
   } // Fin de if confirm

 ?>
