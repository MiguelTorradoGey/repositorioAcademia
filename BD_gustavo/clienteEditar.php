<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cliente Nuevo</title>
    <?php
      include "bootstrap.php";
     ?>
  </head>
  <body>
    <?php
      $id = $_GET['id'];
      include "conexion.php";
      $sql = "select * from clientes where id = $id";
      $consulta = $conexion->prepare($sql);
      $consulta->execute();
      $clientes = $consulta->fetchAll();
      foreach ($clientes as $registro) {
        $nombre = $registro['nombre'];
        $apellidos = $registro['apellidos'];
        $direccion = $registro['direccion'];
        $cif = $registro['cif'];
      }

     ?>
    <form class="" action="clienteEditarGuardar.php" method="post">
      <h2>Cliente nuevo</h2>
      <input type="text" name="id" value="<?php echo $id ?>" hidden>
      <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
      </p>
        <p>
          <label for="apellidos">Apellidos</label>
          <input type="text" name="apellidos" value="<?php echo $apellidos ?>">
        </p>
        <p>
          <label for="cif">C.I.F.</label>
          <input type="text" name="cif" value="<?php echo $cif ?>">
        </p>
        <p>
          <label for="direccion">Direccion</label>
          <input type="text" name="direccion" value="<?php echo utf8_encode($direccion) ?>">
        </p>

        <input type="submit" name="" value="GUARDAR">

    </form>

  </body>
</html>
