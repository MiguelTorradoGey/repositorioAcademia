<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cliente Nuevo</title>
    <?php
      include "bootstrap.php";
     ?>
     <link rel="stylesheet" href="css/productosNuevo.css">
  </head>
  <body>

    <form class="frmNuevo" action="productosNuevoGuardar.php" enctype="multipart/form-data" method="post">
      <div class="btnRegresar">
        <a href="productos.php">
          <button class="btnVolver btn btn-primary active" type="button" name="button">Volver a productos y cancelar</button>
        </a>
      </div>
      <div class="inDatos">
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
        <input type="file" name="image" value="Enviar">
        </p>
        <p>
          <input type="submit" class="btn btn-secondary" name="" value="GUARDAR">
        </p>
      </div>

    </form>
  </body>
</html>
