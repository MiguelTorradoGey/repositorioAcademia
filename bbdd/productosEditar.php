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

      $sql = "select * from productos WHERE id=".$id;
      $consulta = $conexion->prepare($sql);
      $consulta->execute();
      $clientes = $consulta->fetchAll();

      foreach ($clientes as $registro) {
        $codigo = $registro['codigo'];
        $nombre = $registro['nombre'];
        $descripcion = $registro['descripcion'];
        $precio = $registro['precio'];
        $stock = $registro['stock'];
        $activo = $registro['activo'];
      }

     ?>

     <form class="" action="productosEditarNuevo.php" method="post">
       <input type="hidden" name="id" value="<?php echo $id ?>" >
       <p>
       <label for="codigo">Código</label>
       <input type="text" name="codigo" value="<?php echo $codigo ?>">
       </p>
       <p>
       <label for="nombre">Nombre</label>
       <input type="text" name="nombre" value="<?php echo $nombre ?>">
       </p>
       <p>
       <label for="descripcion">Descrpción</label>
       <input type="text" name="descripcion" value="<?php echo $descripcion ?>">
       </p>
       <p>
       <label for="precio">Precio</label>
       <input type="text" name="precio" value="<?php echo $precio ?>">
       </p>
       <p>
       <label for="stock">Stock</label>
       <input type="text" name="stock" value="<?php echo $stock ?>">
       </p>
       <p>
       <label for="activo">Activo</label>
       <input type="text" name="activo" value="<?php echo $activo ?>">
       </p>
       <p>
       <input type="submit" name="" value="GUARDAR">
       </p>

     </form>
  </body>
</html>
