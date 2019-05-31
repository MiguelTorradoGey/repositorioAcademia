<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticket</title>
    <link rel="stylesheet" href="css/formularios.css">
    <?php
      include "bootstrap.php";
      include "conexion.php";
      if(isset($_GET['id']))
      {
        $id = $_GET['id'];
      }
      else {
        $id = 0;
      }
     ?>
     <script src="js/ticketNuevo.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="cabecera">
      <form class="" action="ticketNuevoGuardar.php" method="post">
        <?php
          if($id == 0){
            echo "selecciona cliente";
            echo '<select class="" name="idCliente">';
            $sql = "select id, nombre, apellidos from clientes";
            $consulta = $conexion->prepare($sql);
            $consulta->execute();
            $clientes = $consulta->fetchAll();
            foreach ($clientes as $cliente ) {
              echo '<option value="'.$cliente['id'].'">'.$cliente['nombre'].' '.$cliente['apellidos'].'</option>';
            }
            echo '</select>';
            $fecha = getdate();
            $fecha2= $fecha['mday']."/".$fecha['mon']."/".$fecha['year'].":".$fecha['hours'].":".$fecha['minutes'];
            echo 'fecha ';
            echo '<input type="text" name="fecha" value="'.$fecha2.'">';
            echo '<input type="submit" class="btn btn-success" name="" value="CREAR">';
          }
          else {
              // ya existe el ticket y solo  mostramos los datos
              $sql = "select *
                        from tickets t
                        join clientes c
                        on t.idCliente = c.id
                        where t.id =".$id;
              $consulta = $conexion->prepare($sql);
              $consulta->execute();
              $tickets = $consulta->fetchAll();
              foreach ($tickets as $ticket ) {
                echo "Nº Ticket:".$id;
                echo '  cliente  ';
                echo '<input type="text" name="" value="'.$ticket['nombre'].' '.$ticket['apellidos'].'" disabled>';
                echo 'fecha ';
                echo '<input type="text" name="" value="'.$ticket['fecha'].'"disabled>';
              }

          }

         ?>

      </form>



    </div>
    <div class="cuerpo">
      <div class="lineasForm">
        <form class="" action="ticketLineaGuardar.php" method="post">
            Producto
            <select class="" name="idProducto" <?php if($id==0) echo "disabled"?> >
              <option value="">Seleciona Producto</option>
              <?php
                  if($id>0)
                  {
                    $sql = "select id, codigo, nombre from productos";
                    $consulta = $conexion->prepare($sql);
                    $consulta->execute();
                    $productos = $consulta->fetchAll();
                    foreach ($productos as $producto ) {
                      echo '<option value="'.$producto['id'].'">'.$producto['codigo'].' - '.$producto['nombre'].'</option>';
                    }
                  }
               ?>
            </select>
            <input type="text" name="idTicket" value="<?php echo $id ?>" hidden>
            Unidades
            <input type="number" class="valores" id="unidades" name="unidades" value="0" <?php if($id==0) echo "disabled"?> >
            Precio
            <input type="number" class="valores" id="precio" name="precio" value="0" <?php if($id==0) echo "disabled"?> >
            Total
            <input type="text" name="" value="0" id="total" disabled>
            <input type="submit" class="btn btn-success"name="" value="Añadir" <?php if($id==0) echo "disabled"?> >

        </form>

      </div>
      <div class="lineas">
        <table class="table">
          <tr>
            <th>Producto</th>
            <th>Unidades</th>
            <th>Precio</th>
            <th>Base</th>
            <th>Total</th>
          </tr>
          <?php
              if($id>0)
              {
                $sql = "select p.codigo, p.nombre, tl.cantidad
                ,tl.precio, tl.iva, (tl.cantidad * tl.precio) as base
                , (tl.cantidad * tl.precio) *((100 + tl.iva)/100) as total
                FROM ticketlineas tl
                join productos p
                on tl.idproducto = p.id
                where idTicket = $id
                order by tl.id DESC";

                $consulta = $conexion->prepare($sql);
                $consulta->execute();
                $registros = $consulta->fetchAll();
                foreach ($registros as $linea ) {
                  echo "<tr>";
                  echo "<td>".$linea['codigo'] ." - ".$linea['nombre']."</td>";
                  echo "<td>".$linea['cantidad'] ."</td>";
                  echo "<td>".$linea['precio'] ."</td>";
                  echo "<td>".$linea['base'] ."</td>";
                  echo "<td>".$linea['total'] ."</td>";
                  echo "</tr>";
                }
              }
           ?>
        </table>

      </div>
    </div>

  </body>
</html>
