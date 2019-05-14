<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CLientes</title>
  </head>
  <body>
    <?php
     include "conexion.php";
     include "bootstrap.php";
     ?>
     <h2>Clientes</h2>
     <?php
// *** Conectanmos y leemos la base de datos ***
     $sql = "select * from clientes";
     $consulta = $conexion->prepare($sql);
     $consulta->execute();
     $clientes = $consulta->fetchAll();
// *** ______________________________________ ***
     // print_r($clientes);
     echo "<table>";
     echo "<tr><th>Nombre</th><th>Apellidos</th><th>Direccion</th></tr>";
     foreach ($clientes as $registro) {
       echo "<tr><td>".$registro['nombre']."</td>";
       echo "<td>".utf8_encode($registro['apellidos'])."</td>";
       echo "<td>".$registro['direccion']."</td></tr>";
     }
     echo "</table>";
      ?>
  </body>
</html>
