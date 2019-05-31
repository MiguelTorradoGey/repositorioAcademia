<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 4</title>
    <?php
    include "bootstrap.php";

    if(isset($_POST['col1'])){
      $col1 = $_POST['col1'];
      } else {
        $col1 = 0;
      }
    if(isset($_POST['col2'])){
      $col2 = $_POST['col2'];
      } else {
        $col2 = 0;
      }
    if(isset($_POST['col3'])){
      $col3 = $_POST['col3'];
      } else {
        $col3 = 0;
      }
    if(isset($_POST['col4'])){
      $col4 = $_POST['col4'];
      } else {
        $col4 = 0;
      }

     ?>
  </head>
  <body>
    <form class="" action="form3.php" method="post">
      <p>
        <label for="text">Columna 1</label>
        <input type="" name="col1" value="">
      </p>
      <p>
        <label for="text">Columna 2</label>
        <input type="" name="col2" value="">
      </p>
      <p>
        <label for="text">Columna 3</label>
        <input type="" name="col3" value="">
      </p>
      <p>
        <label for="text">Columna 4</label>
        <input type="" name="col4" value="">
      </p>
      <input type="submit" name="" value="Crear">
    </form>
    <?php
      echo "<table class='table'>";
      echo "<tr><th>".$col1."</th><th>".$col2."</th><th>".$col3."</th><th>".$col4."</th></tr>";

      for ($i=1; $i <=4 ; $i++) {
        echo "<tr><td>".($col1+$i)."</td><td>".$col2++."</td><td>".$col3++."</td><td>".$col4++."</td></tr>";
      }
      echo "</table>";
     ?>
     <table>
       <tr>
         <th></th>
       </tr>
     </table>


  </body>
</html>
