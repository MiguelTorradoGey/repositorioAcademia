<?php
  $id = $_POST['id'];
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];

  $sql = "update productos
  set codigo='".$codigo."', nombre='".$nombre."', descripcion='".$descripcion."',
  precio='".$precio."', activo='".$activo."', fechaUltimaCompra=now()
  WHERE id=".$id;
  echo $sql."<br>";
// abrimos la consulta
  include "conexion.php";

// preparamos la consulta
  $consulta = $conexion->prepare($sql);
// ejecutamos la consulta
  if ($consulta->execute())
     {
       // echo "introducido";
       header('Location:productos.php');
     } else {
       echo "eror";
     }
 ?>
