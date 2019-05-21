<?php
  $id = $_POST['id'];
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $cif = $_POST['cif'];
  $direccion = $_POST['direccion'];

  $sql = "update clientes
  set nombre='".$nombre."', apellidos='".$apellidos."', direccion='".$direccion."', cif='".$cif."'
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
       header('Location:clientes.php');
     } else {
       echo "eror";
     }



 ?>
