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
    <form class="" action="clienteNuevoGuardar.php" method="post">
      <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
      </p>
      <p>
      <label for="apellidos">Apellidos</label>
      <input type="text" name="apellidos" value="">
      </p>
      <p>
      <label for="cif">C.I.F.</label>
      <input type="text" name="cif" value="">
      </p>
      <p>
      <label for="direccion">Dirección</label>
      <input type="text" name="direccion" value="">
      </p>
      <p>
      <input type="submit" name="" value="GUARDAR">
      </p>

    </form>
  </body>
</html>
