<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <?php
      include "bootstrap.php";
     ?>
  </head>
  <body>
    <?php
      include "conexion.php";
     ?>
     <h2>Productos</h2>
     <a href="productoNuevo.php"><button type="button" class="btn btn-success" name="button">Nuevo</button></a>
     <table class="table">
       <tr>
         <th>ID</th>
         <th>Código</th>
         <th>Nombre</th>
         <th>Descripción</th>
         <th>Precio</th>
         <th>Stock</th>
         <th>Activo</th>
         <th></th>
       </tr>
     <?php
        $sql = "select * from productos";
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $productos = $consulta->fetchAll();
        // print_r($clientes);
        foreach($productos as $registro){
          echo "<tr><td>".utf8_encode($registro['id'])."</td>";
          echo "<td>".utf8_encode($registro['codigo'])."</td>";
          echo "<td>".utf8_encode($registro['nombre'])."</td>";
          echo "<td>".utf8_encode($registro['descripcion'])."</td>";
          echo "<td>".utf8_encode($registro['precio'])."</td>";
          echo "<td>".utf8_encode($registro['stock'])."</td>";
          echo "<td>".utf8_encode($registro['activo'])."</td>";
          //el ? quiere decir que le voy pasar el parametro por get y le paso ese valor clienteBorrar.php?id='.$registro['id']
          echo '<td><a href="productoBorrar.php?id='.$registro['id'].'"><button type="button" class="btn btn-danger" name="button">Borrar</button></a>';
          echo '<a href="productoEditar.php?id='.$registro['id'].'"><button type="button" class="btn btn-success" name="button">Editar</button></a></td>';
          echo "</tr>";
        }
      ?>
     </table>
  </body>
</html>
