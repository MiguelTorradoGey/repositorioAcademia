<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tickets venta</title>

    <?php
    include "conexion.php";
    include "bootstrap.php";
    if(isset($_POST['fDesde']) && isset($_POST['fHasta']))
    {
        $fDesde = $_POST['fDesde'];
        $fHasta = $_POST['fHasta'];
    }else {
      $fechaActual = date("Y-m-d");
      $fHasta = $fechaActual;
      $fDesde = date("Y-m-d",strtotime('-3 day', strtotime($fechaActual)));
    }

     ?>
     <link rel="stylesheet" href="css/formularios.css">
  </head>
  <body>
    <h2>Tickets Venta</h2>
    <div class="filtros">
        <form class="" action="Tickets.php" method="post">
          <div class="form-group">
              <label for="fDesde">Fecha Desde</label>
              <input type="text" class="form-control" name="fDesde" id="fDesde" value="<?php echo $fDesde ?>">
          </div>
          <div class="form-group">
              <label for="fHasta">Fecha Hasta</label>
              <input type="text" class="form-control" name="fHasta" id="fHasta" value="<?php echo $fHasta ?>">
          </div>
          <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>
        <a href="ticketNuevo.php"> <button type="button" class="btn btn-success" name="button">Nuevo Ticket</button> </a>
    </div>
    <div class="lineas cuerpo">

      <table class="tabla table">
          <tr>
            <th>Numero</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Total</th>
            <th></th>
          </tr>

          <?php
            $sql = "select t.id, cl.nombre, cl.apellidos, t.fecha, sum(tl.cantidad * tl.precio) as total
              from tickets t join ticketlineas tl on t.id = tl.idTicket
              join clientes cl on t.idCliente = cl.id
              where t.fecha >='".$fDesde." 00:00:00' and t.fecha<= '".$fHasta." 23:59:59'
              group by t.id
              order by t.id DESC";
              $consulta = $conexion->prepare($sql);
              $consulta->execute();
              $registros = $consulta->fetchAll();
              foreach ($registros as $registro) {
                  echo "<tr>";
                    echo "<td>".$registro['id']."</td>";
                    echo "<td>".$registro['nombre']." ".$registro['apellidos']."</td>";
                    echo "<td>".$registro['fecha']."</td>";
                    echo "<td>".$registro['total']."</td>";
                    echo '<td><a href="ticketNuevo.php?id='.$registro['id'].'"> <button type="button" class="btn btn-success" name="button">EDITAR</button> </a></td>';
                  echo "</tr>";
              }

           ?>
      </table>

    </div>
  </body>
</html>
