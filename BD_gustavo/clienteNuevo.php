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
      <h2>Cliente nuevo</h2>
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
          <label for="direccion">Direccion</label>
          <input type="text" name="direccion" value="">
        </p>

        <input type="submit" name="" value="GUARDAR">

    </form>

  </body>
</html>
