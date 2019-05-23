<?php
include "conexion.php";

  $idTicket = $_POST['idTicket'];
  $idProducto = $_POST['idProducto'];
  $unidades = $_POST['unidades'];
  $precio = $_POST['precio'];

  $sql ="insert into ticketslineas
  (idTicket, idProducto, cantidad, precio, iva)
  values($idTicket, $idProducto, $unidades,$precio, 21)";

  $consulta = $conexion->prepare($sql);
  if($consulta->execute())
  {
    header("location:ticketNuevo.php?id=".$idTicket);
  } else {
    echo "error";
  }


 ?>
