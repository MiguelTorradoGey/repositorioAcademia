<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clientes</title>
    <?php
      include "bootstrap.php";
     ?>
  </head>
  <body>
    <?php
        include "conexion.php";
        if(isset($_POST['nombre']))
        {
          $nombre = "%".$_POST['nombre']."%";
        }
        else {
          $nombre = "";
        }// controlar nombre
        if(isset($_POST['apellidos']))
        {
          $apellidos = "%".$_POST['apellidos']."%";
        }
        else {
          $apellidos = "";
        }// controlar apellidos
        if(isset($_POST['direccion']))
        {
          $direccion = "%".$_POST['direccion']."%";
        }
        else {
          $direccion = "";
        }// controlar Direccion


     ?>
     <h2>Clientes</h2>
     <form class="" action="clientes.php" method="post">
       <label for="nombre">Nombre</label>
       <input type="text" name="nombre" value="">
       <label for="apellidos">Apellidos</label>
       <input type="text" name="apellidos" value="">
       <label for="direccion">Dirección</label>
       <input type="text" name="direccion" value="">
       <input type="submit" name="" value="Buscar" class="btn btn-success">
     </form>
     <a href="clienteNuevo.php">
       <button type="button" class="btn btn-success" name="button">
         NUEVO
       </button>
     </a>
     <table class="table">
       <tr>
         <th>id</th>
         <th>nombre</th>
         <th>apellidos</th>
         <th>direccion</th>
         <th></th>
       </tr>


     <?php
        $primero = true;
        $sql = "select * from clientes";
        if($nombre != "")
        {
          $primero = false;
          $sql .=" where nombre like '$nombre'";
        }

        if($apellidos !="")
        {
          if($primero)
          {
            $sql .= " where ";
            $primero = false;
          }
          else {
            $sql .= " and ";
          }
          $sql .= " apellidos like '$apellidos' ";
        }

        if($direccion !="")
        {
          if($primero)
          {
            $sql .= " where ";
            $primero = false;
          }
          else {
            $sql .= " and ";
          }
          $sql .= " direccion like '$direccion' ";
        }


        //echo $sql;
        $consulta = $conexion->prepare($sql);
        $consulta->execute();
        $clientes = $consulta->fetchAll();
        foreach ($clientes as $registro) {
          echo "<tr>";
          echo "<td> ". $registro['id']."</td>";
          echo "<td> ". $registro['nombre']."</td>";
          echo "<td> ". $registro['apellidos']."</td>";
          echo "<td> ". utf8_encode( $registro['direccion'])."</td>";
          echo '<td> <a href="clienteBorrar.php?id='.$registro['id'] .'">
          <button type="button" class= "btn btn-danger" name="button">
          borrar</button> </a>';
          echo ' <a href="clienteEditar.php?id='.$registro['id'] .'">
          <button type="button" class= "btn btn-success" name="button">
          Editar</button> </a></td>';
          echo "</tr>";
        }

      ?>
        </table>
  </body>
</html>
