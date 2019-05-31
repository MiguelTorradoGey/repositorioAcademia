<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Producto Nuevo</title>
    <?php
      include "bootstrap.php";
     ?>
  </head>
  <body>
     <form action="productoNuevoGuardar.php" method="post">
       <h2>Producto Nuevo</h2>
       <p>
         <label for="codigo">Código:</label>
         <input type="text" name="codigo" value="" autofocus>
       </p>
       <p>
         <label for="nombre">Nombre:</label>
         <input type="text" name="nombre" value="">
       </p>
       <p>
         <label for="descripcion">Descripción:</label>
         <input type="text" name="descripcion" value="">
       </p>
       <p>
         <label for="precio">Precio:</label>
         <input type="text" name="precio" value="">
       </p>
       <p>
         <label for="stock">Stock:</label>
         <input type="text" name="stock" value="">
       </p>
       <p>
         <label for="activo">Activo:</label>
         <input type="text" name="activo" value="">
       </p>
       <p>
         <input type="submit" class="boton" name="darAlta" value="Guardar">
       </p>
     </form>
  </body>
</html>
