<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tabla creada</title>
    <link rel="stylesheet" href="css/micss.css">
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
          echo "<table class='formatoTabla'>";
            $numero = 0;
            for($n=1; $n<=$filas; $n++){
              // primera linea de la tabla
              if($n == 1){
                echo "<tr>";
                for ($i=1; $i <= $columnas ; $i++) {
                  echo "<th>Columna $i</th>";
                  $numero++;
                }
                echo "</tr>";
                } else {
                // seguda linea de latabla
                echo "<tr>";
                for ($i=1; $i <= $columnas ; $i++) {
                  echo "<td>$numero</td>";
                  $numero++;
                }
                echo "</tr>";
               }
            }
          echo "</table>";
        }
      } else {
        // echo "valores no válidos";
        header('location:tabla1.php');
      }
     ?>
  </body>
</html>
