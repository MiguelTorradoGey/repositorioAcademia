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
     <p>
       <h2>Productos</h2>
       <a href="productosNuevo.php"><input type="submit" class="btn btn-success" name="" value="Nuevo"></a>
       <a href="clientes.php"><input type="submit" class="btn btn-primary" name="" value="Clientes"></a>
       <a href="productosBuscar.php"><input type="submit" class="btn btn-warning" name="" value="Busca producto"></a>
     </p>

     <?php
// *** Conectanmos y leemos la base de datos ***
     $sql = "select * from productos";
     $consulta = $conexion->prepare($sql);
     $consulta->execute();
     $clientes = $consulta->fetchAll();
// *** ______________________________________ ***
     // print_r($clientes);
     echo "<table class='table'>";
     echo "<tr><th>id</th><th>Código</th><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Stock</th><th>Activo</th><th>Fecha última compra</th></tr>";

     foreach ($clientes as $registro) {
       echo "<tr><td>".$registro['id']."</td>";
       echo "<td>".utf8_encode($registro['codigo'])."</td>";
       echo "<td>".utf8_encode($registro['nombre'])."</td>";
       echo "<td>".utf8_encode($registro['descripcion'])."</td>";
       echo "<td>".utf8_encode($registro['precio'])."</td>";
       echo "<td>".utf8_encode($registro['stock'])."</td>";
       echo "<td>".utf8_encode($registro['activo'])."</td>";
       echo "<td>".utf8_encode($registro['fechaUltimaCompra'])."</td>";
       echo '<td><a href="productosBorrar.php?id='.$registro['id'].'">
       <button type="button" class="btn btn-danger" name="button">
       Borrar</button> </a>';
       echo '<td><a href="productosEditar.php?id='.$registro['id'].'">
       <button type="button" class="btn btn-success" name="button">
       Editar</button>  </a></td>';

       echo "</tr>";
     }
     echo "</table>";
      ?>

  </body>
</html>
