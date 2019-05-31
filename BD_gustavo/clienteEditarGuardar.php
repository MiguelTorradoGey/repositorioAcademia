<?php
  include "conexion.php";
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $direccion = $_POST['direccion'];
  $cif = $_POST['cif'];
  $id = $_POST['id'];

  $sql = "update clientes
        set nombre ='$nombre'
        ,apellidos = '$apellidos'
        ,direccion = '$direccion'
        ,cif = '$cif'
        where id = $id";
  try {

    $consulta = $conexion->prepare($sql);
    if ($consulta->execute())
    {
      header("location:clientes.php");
    }else {
      echo " error en la consulta";
    }

  } catch (\Exception $e) {
    echo "error al actualizar";
  }





 ?>
