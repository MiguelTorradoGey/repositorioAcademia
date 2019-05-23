
<?php
  $codigo = $_POST['codigo'];
  // $codigo = "cod-".$id;
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $stock = $_POST['stock'];
  $activo = $_POST['activo'];

  $sql = "insert into productos
  (codigo, nombre, descripcion, precio, stock, activo, fechaUltimaCompra)
  values('$codigo', '$nombre', '$descripcion', '$precio', '$stock', '$activo', now())";
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
