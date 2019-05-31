<?php
//capturamos los datos del formulario
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $activo = $_POST['activo'];

//preparamos la consulta sql
  $sql = "insert into productos
(codigo, nombre, descripcion, precio, stock, activo)
values ('$codigo', '$nombre', '$descripcion', '$precio', '$stock', '$activo')";

//abrimos la conexion
include "conexion.php";
//preparamos la consulta
$consulta = $conexion->prepare($sql);
//ejecutamos la consulta
if ($consulta->execute())
{
  //si todo esta bien volvemos a la pantalla clientes
  header('location: productos.php');
}
  else {
    echo "error";
  }

 ?>
