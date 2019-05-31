<?php
  $id = $_GET['id'];

  $sql = "delete from clientes where id = $id";

  // abrimos la conexion
    include "conexion.php";
  //  preparamos la consulta
    $consulta = $conexion->prepare($sql);
  // ejecutamos la consulta
    if ($consulta->execute())
    {
      // si todo esta bien volvemos a la pantalla clientes
      header('Location: clientes.php');
    }else {
      echo "error";
    }


 ?>
