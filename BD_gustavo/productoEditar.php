<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Editar Producto</title>
    <?php
      include "bootstrap.php";
     ?>
  </head>
  <body>

    <?php
      $id = $_GET['id'];
      //abrimos la conexion
      include "conexion.php";

      $sql = "select * from productos where id = $id";


      //preparamos la consulta
      $consulta = $conexion->prepare($sql);
      //ejecutamos la consulta
      $consulta->execute();
      $productos = $consulta->fetchAll();
      // print_r($clientes);
      foreach($productos as $registro){
        $codigo = $registro['codigo'];
        $nombre = $registro['nombre'];
        $descripcion = $registro['descripcion'];
        $precio = $registro['precio'];
        $stock = $registro['stock'];
        $activo = $registro['activo'];
      }
     ?>

     <form action="productoEditarGuardar.php" method="post">
       <h2>Editar Producto</h2>
       <input type="text" name="id" value="<?php echo $id ?>" hidden>
       <p>
         <label for="codigo">Código:</label>
         <input type="text" name="codigo" value="<?php echo $codigo ?>" autofocus>
       </p>
       <p>
         <label for="nombre">Nombre:</label>
         <input type="text" name="nombre" value="<?php echo $nombre ?>">
       </p>
       <p>
         <label for="descripcion">Descripción:</label>
         <input type="text" name="descripcion" value="<?php echo $descripcion ?>">
       </p>
       <p>
         <label for="precio">Precio:</label>
         <input type="text" name="precio" value="<?php echo $precio ?>">
       </p>
       <p>
         <label for="stock">Stock:</label>
         <input type="text" name="stock" value="<?php echo $stock ?>">
       </p>
       <p>
         <label for="activo">Activo:</label>
         <input type="text" name="activo" value="<?php echo $activo ?>">
       </p>
       <p>
         <input type="submit" class="boton" name="" value="Guardar cambios">
       </p>
     </form>
  </body>
</html>
