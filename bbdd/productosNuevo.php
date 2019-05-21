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
    <form class="" action="productosNuevoGuardar.php" method="post">
      <p>
      <label for="codigo">Código</label>
      <input type="text" name="codigo" value="">
      </p>
      <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="">
      </p>
      <p>
      <label for="descripcion">Descrpción</label>
      <input type="text" name="descripcion" value="">
      </p>
      <p>
      <label for="precio">Precio</label>
      <input type="text" name="precio" value="">
      </p>
      <p>
      <label for="stock">Stock</label>
      <input type="text" name="stock" value="">
      </p>
      <p>
      <label for="activo">Activo</label>
      <input type="text" name="activo" value="">
      </p>
      <p>
      <input type="submit" name="" value="GUARDAR">
      </p>

    </form>
  </body>
</html>
