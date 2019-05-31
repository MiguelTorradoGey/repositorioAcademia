<?php
//capturamos los datos del formulario
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $activo = $_POST['activo'];
  $id = $_POST['id'];

//preparamos la consulta sql
  $sql = "update productos
set codigo = '$codigo'
, nombre = '$nombre'
, descripcion = '$descripcion'
, precio = $precio
, stock = $stock
, activo = $activo
where id = $id";


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
    echo "error al actualizar";
  }


 ?>
