<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tikect Nuevo </title>
    <?php
      include "bootstrap.php";
      include "conexion.php";

      if(isset($_GET['id'])){
        $id = $_GET['id'];
        } else {
          $id = 0;
        } //controlar id
     ?>
     <script src="js/calcularValor.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="cabecera">
      <a href="clientes.php"><input type="submit" class="btn btn-primary"  style="margin-left:10px" name="" value="Volver a Clientes"></a>
      <form class="" action="ticketNuevoGuardar.php" method="post">
      <?php
         if($id == 0){
           echo 'selecciona cliente';
           echo '<select class="" name="idCliente">';

             $sql = "select nombre, apellidos, id from clientes order by id";
             $consulta = $conexion->prepare($sql);
             $consulta->execute();
             $clientes = $consulta->fetchAll();
           foreach ($clientes as $registro) {
             echo "<option value='".$registro['id']."'>".utf8_encode($registro['nombre'])." ".utf8_encode($registro['apellidos'])."</option>";
             }
           echo '</select>';
            $fecha = getdate();
            $fecha2 = $fecha['mday']."-".$fecha['mon']."-".$fecha['year']." ".$fecha['hours'].":".$fecha['minutes'];
           echo 'fecha';
           echo '<input type="text" name="fecha" value="'.$fecha2.'">';
           echo '<input type="submit" class="btn btn-success" name="" value="CREAR">';
         } else {
           // ya existe el ticket y solo mostramos los datos
           $sql = "select t.id, t.fecha, c.nombre, c.apellidos
                  from tickets t
                  join clientes c
                  on t.idClientes = c.id
                  where t.id=".$_GET['id'];
            $consulta = $conexion->prepare($sql);
            $consulta->execute();
            $tickets = $consulta->fetchAll();

            foreach ($tickets as $registro) {
              echo "Nº ticket: ".$registro['id'];
              echo " Nombre y apellidos: ";
              echo '<input type="text" value="'.utf8_encode($registro['nombre']).' '.utf8_encode($registro['apellidos']).'">';
              echo " Fecha: ";
              echo '<input type="text" name="fecha" value="'.$registro['fecha'].'">';
            }
         }
       ?>
      </form>
    </div>
    <div class="cuerpo">
      <div class="lineasForm">
        <form class="" action="ticketLineaGuardar.php" method="post">
          Producto
          <select class="" name="idProducto">
            <option value="0">Selecciona un producto</option>

            <?php
            if($id > 0){
              $sql = "select id, codigo, nombre from productos order by id";
              $consulta = $conexion->prepare($sql);
              $consulta->execute();
              $clientes = $consulta->fetchAll();
            foreach ($clientes as $registro) {
              echo "<option value='".$registro['id']."'>".utf8_encode($registro['codigo'])." - ".utf8_encode($registro['nombre'])."</option>";
              }
            }
             ?>

          </select>
          <input type="text" name="idTicket" value="<?php echo $id ?>" hidden>
          Unidades
          <input id="unidades" type="number" name="unidades" value="0" <?php if($id==0) echo'disabled'?>>
          Precio
          <input id="precio" class="calcular" type="number" name="precio" value="0" <?php if($id==0) echo'disabled'?>>
          Total
          <input id="total" type="text" name="" value="0" disabled>
          <input type="submit" name="" value="Añadir" <?php if($id==0) echo'disabled'?> >
        </form>

      </div>
      <div class="lineas">
        <?php
        echo "<table class='table'>";
        echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Base</th><th>Total</th></tr>";
        if($id > 0){
            $sql = "select p.codigo, p.nombre, tl.cantidad, tl.precio, tl.iva,
                    (tl.cantidad * tl.precio) * ((100 + tl.iva)/100) as total
                    from ticketsLineas tl
                    join productos p
                    on tl.idProducto = p.id
                    where idTicket = $id
                    order by tl.id DESC";
              $consulta = $conexion->prepare($sql);
              $consulta->execute();
              $clientes = $consulta->fetchAll();

              foreach ($clientes as $registro) {
                echo "<tr>";
                echo "<td>".utf8_encode($registro['nombre'])." - ".$registro['codigo']."</td>";
                echo "<td>".$registro['cantidad']."</td>";
                echo "<td>".$registro['precio']."</td>";
                echo "<td>".$registro['iva']."</td>";
                echo "<td>".$registro['total']."</td>";
                echo "</tr>";
               }
             }
          echo "</table>";
         ?>
      </div>

    </div>

  </body>
</html>
