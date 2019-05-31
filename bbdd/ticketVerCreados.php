<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ver tickets creados</title>
    <?php
      include "bootstrap.php";
      include "conexion.php";
     ?>
  </head>
  <body>
    <h2>Ver los tickets creados</h2>
    <a href="clientes.php"><input type="submit" class="btn btn-primary"  style="margin-left:10px" name="" value="Volver a Clientes"></a>
    <div class="">
      <table class="table">
        <tr>
          <th>Clientes con ticket creado</th><th>Cantidad de tickets</th>
        </tr>

          <?php
            $sql = "select c.nombre, c.apellidos, count(*)
                    from clientes c
                    join tickets t
                    on t.idClientes = c.id
                    group by c.id";
            $consulta = $conexion->prepare($sql);
            $consulta->execute();
            $clientes = $consulta->fetchAll();

            foreach ($clientes as $registro) {
              echo "<tr>";
              echo "<td>".utf8_encode($registro['nombre'])." ".utf8_encode($registro['apellidos'])."</td>
              <td>".$registro['count(*)']."</td>
              <td><a href='ticketVerPersonal.php'><button type='button' name='' class='btn btn-success'>Mostrar tickets</button></a></td>";
              echo "</tr>";
              }
           ?>

      </table>
    </div>

  </body>
</html>
