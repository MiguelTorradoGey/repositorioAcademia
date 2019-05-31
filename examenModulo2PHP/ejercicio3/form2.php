<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercicio 3</title>
    <?php
    if(isset($_GET['texto'])){
      $texto = $_GET['texto'];
      } else {
        $texto = false;
      }
     ?>
  </head>
  <body>
    <form class="" action="post2.php" method="post">
      <p>
        <label for="text">Escribe a tua mensaxe</label>
        <?php
        if(isset($_GET['texto'])){
          echo '<input type="text" name="mensaxe" value="'.$texto.'">';
        } else {
          echo '<input type="text" name="mensaxe" value="">';
        }
         ?>

      </p>
      <input type="submit" name="" value="Enviar">
    </form>
    <?php
    if($texto != false){
      echo "A mensaxe non debe exceder os 50 caracteres";
    }
     ?>
  </body>
</html>
