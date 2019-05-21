<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CLientes</title>
    <?php
       include "bootstrap.php";
     ?>
  </head>
  <body>
    <?php
     include "conexion.php";

     if(isset($_POST['nombre'])){
       $nombre = "%".$_POST['nombre']."%";
       } else {
         $nombre = "";
       } //controlar nombre
     if(isset($_POST['apellidos'])){
       $apellidos = "%".$_POST['apellidos']."%";
       } else {
         $apellidos = "";
       } // controlar apellidos
     if(isset($_POST['direccion'])){
       $direccion = "%".$_POST['direccion']."%";
       } else {
         $direccion = "";
       } // controlar direccion
     ?>

     <h2>Clientes</h2>
      <form class="" action="clientes.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" value="">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" value="">
        <input type="submit" name="" class="btn btn-success" value="BUSCAR">
      </form>
    <p>
     <a href="clienteNuevo.php"><input type="submit" class="btn btn-success" name="" value="Nuevo"></a>
     <a href="productos.php"><input type="submit" class="btn btn-primary" name="" value="Productos"></a>
    </p>


     <?php
// *** Seleccionamos los datos para mpostrar de la base de datos ***
$primero = true;
     $sql = "select * from clientes";

if($nombre != ""){
  $primero = false;
  $sql .= " where nombre like '$nombre'";
} // fin $nombre
if($apellidos != ""){
  if($primero){
    $sql .=" where ";
    $primero = false;
  } else {
    $sql .= " and ";
  }
  $sql .= " apellidos like '$apellidos'";
} // fin apellidos
if($direccion != ""){
  if($primero){
    $sql .=" where ";
    $primero = false;
  } else {
    $sql .= " and ";
  }
  $sql .= " direccion like '$direccion'";
} // fin direccion

// echo $sql;

     $consulta = $conexion->prepare($sql);
     $consulta->execute();
     $clientes = $consulta->fetchAll();
// *** ______________________________________ ***
     // print_r($clientes);
     echo "<table class='table'>";
     echo "<tr><th>id</th><th>Nombre</th><th>Apellidos</th><th>Direccion</th></tr>";

     foreach ($clientes as $registro) {
       echo "<tr><td>".$registro['id']."</td>";
       echo "<td>".utf8_encode($registro['nombre'])."</td>";
       echo "<td>".utf8_encode($registro['apellidos'])."</td>";
       echo "<td>".utf8_encode($registro['direccion'])."</td>";
       echo '<td><a href="clienteBorrar.php?id='.$registro['id'].'">
       <button type="button" class="btn btn-danger" name="button">
       Borrar</button> </a>';
       echo '<td><a href="clienteEditar.php?id='.$registro['id'].'">
       <button type="button" class="btn btn-success" name="button">
       Editar</button>  </a></td>';

       echo "</tr>";
     }
     echo "</table>";
      ?>

  </body>
</html>
