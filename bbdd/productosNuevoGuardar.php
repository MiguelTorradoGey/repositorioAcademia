
<?php
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $activo = $_POST['activo'];

  $codigo = $codigo.$id;

  $sql = "insert into productos
  (nombre, descripcion, precio, stock, activo, fechaUltimaCompra)
  values('$nombre', '$descripcion', '$precio', '$stock', '$activo', now())";
  echo $sql."<br>";
// abrimos la consulta
  include "conexion.php";
// preparamos la consulta
  $consulta = $conexion->prepare($sql);
// ejecutamos la consulta
  if ($consulta->execute())
     {
       // echo "introducido";
       header('Location: productos.php');
     } else {
       echo "error, puede que exista un codigo duplicado";
     }


 ?>
