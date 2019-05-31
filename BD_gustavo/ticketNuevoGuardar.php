<?php
  $idCliente = $_POST['idCliente'];

  include "conexion.php";

  $sql = "insert into tickets (fecha, idCliente)
          values(now(),$idCliente)";

          $consulta = $conexion->prepare($sql);
          if($consulta->execute())
          {
              $sql= "select @@identity as id";
              $consulta = $conexion->prepare($sql);
              $consulta->execute();
              $resultado = $consulta->fetchAll();
              foreach ($resultado as $linea) {
                $id = $linea['id'];
              }

              header("location:ticketNuevo.php?id=".$id);
          }
          else {
            echo "error";
          }


 ?>
