<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver tickets por fecha</title>
    <?php
      include "bootstrap.php";
      include "conexion.php";

      if(isset($_POST['fechaOrigen'])){
        $fechaOrigen = $_POST['fechaOrigen'];
        } else {
          $fechaOrigen = 0;
        } //controlar fecha de origen
      if(isset($_POST['fechaFinal'])){
        $fechaFinal = $_POST['fechaFinal'];
        } else {
          $fechaFinal = 0;
        } //controlar fecha del final
     ?>
     <link rel="stylesheet" href="css/ticketsVerFecha.css">
  </head>
  <body>
    <h2>Ver los tickets ordenados por fecha</h2>
    <a href="clientes.php"><input type="submit" class="btn btn-primary"  style="margin-left:10px" name="" value="Volver a Clientes"></a>
<!-- Bloque buscar -->
    <div class="busqueda">
      <form class="" action="ticketsVerFecha.php" method="post">
        <label for="text">Fecha desde</label>
        <input type="date" name="fechaOrigen" value="">
        <label for="text">Fecha hasta</label>
        <input type="date" name="fechaFinal" value="">
        <input type="submit" class="btn btn-info" name="" value="Filtrar">
      </form>
    </div>
 <!-- Bloque muestra tickets -->
    <div class="tablaMostrar">
      <table class="table">
        <tr>
          <th>Ticket nº</th><th>Cliente</th><th>Fecha</th><th>Total</th>
        </tr>

          <?php
          if($fechaOrigen == 0 && $fechaFinal == 0)
            {
            $fecha = getdate();
            $fechaActual = $fecha['year']."-".$fecha['mon']."-".$fecha['mday'];

            $sql = "select t.id, c.nombre, c.apellidos, t.fecha, tl.precio, tl.cantidad,
                    sum(tl.cantidad * tl.precio) * ((100 + tl.iva)/100) as total
                    FROM clientes c
                    join tickets t
                    on c.id = t.idClientes
                    join ticketslineas tl
                    on t.id = tl.idTicket
                    WHERE fecha BETWEEN date_sub(NOW(), INTERVAL 6 DAY)
                    AND '2019-05-27 23:59:59'
                    group by t.id
                    order by fecha desc";
              } else {
                $sql = "select t.id, c.nombre, c.apellidos, t.fecha, tl.precio, tl.cantidad,
                        sum(tl.cantidad * tl.precio) * ((100 + tl.iva)/100) as total
                        FROM clientes c
                        join tickets t
                        on c.id = t.idClientes
                        join ticketslineas tl
                        on t.id = tl.idTicket
                        WHERE fecha BETWEEN '".$fechaOrigen." 00:00:00'
                        AND '".$fechaFinal." 23:59:59'
                        group by t.id
                        order by fecha desc";
              }
            $consulta = $conexion->prepare($sql);
            $consulta->execute();
            $clientes = $consulta->fetchAll();

            foreach ($clientes as $registro) {
              echo "<tr>";
              echo "<td>".$registro['id']."</td>
              <td>".utf8_encode($registro['nombre'])." ".utf8_encode($registro['apellidos'])."</td>
              <td>".$registro['fecha']."</td>
              <td>".$registro['total']."</td>
              <td><a href='#'><button type='button' name='button' class='btn btn-warning'>Editar</button></a></td>
              <td><a href='#'><button type='button' name='button' class='btn btn-danger'>Borrar</button></a></td>";
              echo "</tr>";
              }
           ?>

      </table>
    </div>

  </body>
</html>
