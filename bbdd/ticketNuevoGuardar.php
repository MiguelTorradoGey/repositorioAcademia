<?php
  $idCliente = $_POST['idCliente'];

  include "conexion.php";

  $sql = "insert into tickets (fecha, idClientes)
         values(now(), $idCliente)";

         $consulta = $conexion->prepare($sql);
         if($consulta->execute())
         {
           $sql = "select @@identity as id";
           $consulta = $conexion->prepare($sql);
           $consulta->execute();
           $clientes = $consulta->fetchAll();

           foreach ($clientes as $linea) {
             $id = $linea['id'];
             }
           echo $id;
           header('Location: ticketNuevo.php?id='.$id);
         } else {
           echo "error";
         }

 ?>
