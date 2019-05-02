<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tabla creada</title>
  </head>
  <body>
    <?php
    if(isset($_GET['columnas']) && isset($_GET['filas']))
      {
        $columnas = $_GET['columnas'];
        $filas = $_GET['filas'];
        if($columnas == "" || $filas == ""){
          echo "Valores no validos";
        } else {
          // mostrar tabla
        }
      } else {
        // echo "valores no válidos";
        header('location:tabla1.php');
      }
     ?>
  </body>
</html>
