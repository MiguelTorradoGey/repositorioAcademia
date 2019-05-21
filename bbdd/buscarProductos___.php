<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Productos</title>
    <script>
      buscarCodigo(){
        var codigo=document.getElementById("code").value;
        alert("busqueda por codigo");

        }
      buscarNombre(){
        var nombre=document.getElementById("nombre").value;
        <?php
        $codigo = "document.write(codigo)";
        echo "El codigo es = ".$codigo;
        ?>
        }
    </script>
  </head>
  <body>
    <?php
     include "conexion.php";
     include "bootstrap.php";
     ?>
     <p>
       <h2>Productos</h2>
       <a href="productos.php"><input type="submit" class="btn btn-primary" name="" value="Productos"></a>
     </p>

     <?php
     // *** Conectanmos y leemos la base de datos ***
      $sql = "select * from productos";
      $consulta = $conexion->prepare($sql);
      $consulta->execute();
      $clientes = $consulta->fetchAll();
     // *** ______________________________________ ***
      ?>

        <input type="text" id="code" name="" value="">
        <input type="button" class="btn btn-success" onclick="buscarCodigo()" name="codigo" value="Por código">
        <input type="text" id="nombre" name="" value="">
        <input type="button" class="btn btn-success" name="nombre" value="Por nombre">


  </body>
