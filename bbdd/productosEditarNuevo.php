<?php
  $id = $_POST['id'];
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $precio = $_POST['precio'];
  $activo = $_POST['activo'];
  $stock = $_POST['stock'];

  $sql = "update productos
  set codigo='".$codigo."', nombre='".$nombre."', descripcion='".$descripcion."',
  precio='".$precio."', activo='".$activo."', stock='".$stock."', fechaUltimaCompra=now()
  WHERE id=".$id;
  echo $sql."<br>";
// abrimos la consulta
  include "conexion.php";

// preparamos la consulta
  $consulta = $conexion->prepare($sql);
// ejecutamos la consulta
  if ($consulta->execute())
     {
       // PRimero carpeta donde vamos a guardar la imagen
       $destino = "fotos/";
       // vemos por pantalla diferentes caracteristicas de la imagenes
       // Debemos anular el header para ver las caracteristicas
       echo " el nombre del archivo es ".$_FILES['image']['name']."<br>";
       echo " el tamaño del archivo es ".$_FILES['image']['size']."<br>";
       echo " el tipo de archivo es ".$_FILES['image']['type']."<br>";
       echo " el nombre temporal del archivo es ".$_FILES['image']['tmp_name']."<br>";

       // Cogemos la extension para añadirlo al archivo que creamos
       $extension = pathinfo($_FILES['image']['name']);
       // Generamos el archivo con nombre y extension
       $ficheroDestino = $destino."productos".$id.".".$extension['extension'];

       if(move_uploaded_file($_FILES['image']['tmp_name'],$ficheroDestino))
         {
           $sql = "update productos set imagen = '$ficheroDestino' where id = $id";
           // preparamos la consulta
             $consulta = $conexion->prepare($sql);
           // ejecutamos la consulta
             if ($consulta->execute())
             {
               header('Location:productos.php');
             }
         } else {
           echo "error al guardar imagen";
       }
       // echo "introducido";
       header('Location:productos.php');
     } else {
       echo "error";
     }
 ?>
