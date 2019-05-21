
<?php
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $cif = $_POST['cif'];
  $direccion = $_POST['direccion'];

  $sql = "insert into clientes
  (nombre, apellidos, direccion, cif)
  values('$nombre', '$apellidos', '$direccion', '$cif')
  ";
  echo $sql."<br>";
// abrimos la consulta
  include "conexion.php";
// preparamos la consulta
  $consulta = $conexion->prepare($sql);
// ejecutamos la consulta
  if ($consulta->execute())
     {
       // echo "introducido";
       header('Location: clientes.php');
     } else {
       echo "eror";
     }


 ?>
