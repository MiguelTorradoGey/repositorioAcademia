
<?php
// capturamos los datos del formulario
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $direccion = $_POST['direccion'];
  $cif = $_POST['cif'];
// preparamos la consulta SQL
  $sql = "insert into clientes
  (nombre, apellidos, direccion, cif)
  values ( '$nombre', '$apellidos', '$direccion', '$cif')
  ";
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
