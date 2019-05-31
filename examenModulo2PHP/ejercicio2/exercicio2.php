<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 2</title>
    <?php
    if(isset($_GET['numero'])){
      $numero = $_GET['numero'];
      } else {
        $numero = -1;
      }
     ?>
  </head>
  <body>
    <p>
      <a href="exercicio2.php?numero=5">
        <input type="submit" name="" value="Mostrar">
      </a>

    <?php
      echo "numero: ".$numero."<br>";
      for ($i=0; $i <= $numero ; $i++) {
        for ($n=0; $n <= $i ; $n++) {
          echo "*";
        }
        echo "<br>";
      }
     ?>
    </p>
  </body>
</html>
