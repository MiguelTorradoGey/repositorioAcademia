<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cliente Nuevo</title>
    <?php
      include "bootstrap.php";
      include "conexion.php";
     ?>
  </head>
  <body>
    <?php
      $id = $_GET['id'];

      $sql = "select * from clientes WHERE id=".$id;
      $consulta = $conexion->prepare($sql);
      $consulta->execute();
      $clientes = $consulta->fetchAll();

      foreach ($clientes as $registro) {
        $nombre = $registro['nombre'];
        $apellidos = $registro['apellidos'];
        $cif = $registro['cif'];
        $direccion = $registro['direccion'];
      }

     ?>

    <form class="" action="clienteEditarNuevo.php" method="post">
      <input type="hidden" name="id" value="<?php echo $id ?>" >
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
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" value="<?php echo $direccion ?>">
      </p>
      <p>
      <input type="submit" name="" value="GUARDAR">
      </p>

    </form>
  </body>
</html>
