<?php
  $id = $_GET['id'];

    $sql = "delete from productos where id = $id";
    include "conexion.php";
  // preparamos la consulta
    $consulta = $conexion->prepare($sql);
  // ejecutamos la consulta
    if ($consulta->execute())
       {
         header('Location: productos.php');
       } else {
         echo "error";
       } // Fin de if consulta

 ?>
