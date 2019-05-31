<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <?php
      include "bootstrap.php";
     ?>
    <script>
      porCodigo(){
        <?php
          if(isset($_POST['codigo']) && $_POST['codigo'] != ""){
            $codigo = "%".$_POST['codigo']."%";
            } else {
              $codigo = "";
              }
          if($codigo != ""){
            $sql = "select * from productos where codigo like '".$codigo."'";
          }
         ?>
        }

      porNombre(){
        <?php
          if(isset($_POST['nombre']) && $_POST['nombre'] != ""){
            $nombre = "%".$_POST['nombre']."%";
          } else {
            $nombre = "";
          }
          if($nombre != ""){
            $sql = "select * from productos where nombre like '".$nombre."'";
          }
         ?>
       }

       porDescripcion(){
         <?php
           if(isset($_POST['descripcion']) && $_POST['descripcion'] != ""){
             $descripcion = "%".$_POST['descripcion']."%";
             } else {
               $descripcion = "";
               }
           if($descripcion != ""){
             $sql = "select * from productos where descripcion like '".$descripcion."'";
           }
          ?>
         }

       <?php
         if($codigo == "" && $nombre == "" && $descripcion == ""){
           $sql = "";
           $informa = "Debe seleccionar un código o un nombre";
         } else {
           $informa = "";
         }

       if(isset($_POST['desde'])){
         $precioDesde = $_POST['desde'];
         } else {
           $precioDesde = 0;
         } //controlar fecha de origen
       if(isset($_POST['hasta'])){
         $precioHasta = $_POST['hasta'];
         } else {
           $precioHasta = 0;
         } //controlar fecha del final
        ?>
    </script>
  </head>
  <body>
    <?php
     include "conexion.php";
     ?>
     <p>
       <h2>Productos</h2>
       <a href="productos.php"><input type="submit" class="btn btn-primary" name="" value="Productos"></a>
     </p>

     <form class="" action="productosBuscar.php" method="post">
       <input type="text" name="codigo" value="">
       <input type="submit" onclick="porCodigo()" class="btn btn-success" name="" value="Por código">
       <input type="text" name="nombre" value="">
       <input type="submit" onclick="porNombre()" class="btn btn-success" name="" value="Nombre producto">
       <input type="text" name="descripcion" value="">
       <input type="submit" onclick="porDescripcion()" class="btn btn-success" name="" value="Por descripción">
    </form>
    <form class="" action="productosBuscar.php" method="post">
      <label for="text">Precio desde</label>
      <input type="number" name="desde" value="">
      <label for="text">Precio hasta</label>
      <input type="number" name="hasta" value="">
      <input type="submit" name="" value="Filtrar">
    </form>



      <?php
      if($precioDesde != 0 && $precioHasta != 0)
      {
        $sql = "select * FROM productos WHERE precio BETWEEN 1 AND 2";
      }
// echo $sql;
      // *** Conectanmos y leemos la base de datos ***
       $consulta = $conexion->prepare($sql);
       $consulta->execute();
       $clientes = $consulta->fetchAll();
      // *** ______________________________________ ***
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
      echo $informa;
       ?>



  </body>
