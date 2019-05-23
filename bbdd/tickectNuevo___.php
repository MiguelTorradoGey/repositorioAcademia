<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tikect Nuevo</title>
    <?php
       include "bootstrap.php";
       include "conexion.php";
     ?>
  </head>
  <body>
    <?php
      $sql = "select * from clientes";

      $consulta = $conexion->prepare($sql);
      $consulta->execute();
      $clientes = $consulta->fetchAll();
     ?>

    <h2>Ticket</h2>
    <p>
    <a href="clientes.php"><input type="submit" class="btn btn-primary"  style="margin-left:10px" name="" value="Volver a Clientes"></a>
    </p>
    <form action="ticketNuevoGuardar.php" method="post">
      <label for="text" style="margin-left:10px">Nombre y apellidos</label>
      <select name='seleccion' style="margin-right:30px">
        <option value=""> </option>
        <?php
          foreach ($clientes as $registro) {
            echo "<option value='".$registro['id']."'>".utf8_encode($registro['nombre'])." ".utf8_encode($registro['apellidos'])."</option>";
          }
         ?>
      </select>
      <?php
        $hora= date ("h:i:s");
        $fecha= date ("j-n-Y");
      ?>
      <label for="text">Fecha: </label>
      <input type="data" name="" value="<?php echo $fecha ?>">
      <label for="text">Hora: </label>
      <input type="data" name="" value="<?php echo $hora ?>">
      <input type="submit" class="btn btn-success" style="margin-left:30px" name="" value="Tiket nuevo guardar">
    </form>
    <form action="ticketLineaGuardar.php" method="post">
      <label for="text">Producto</label>
      <label for="text">Cantidad</label>
      <label for="text">Precio</label>
      <input type="submit" class="btn btn-success" name="" value="Ticket línea guardar">
    </form>


  </body>
</html>
