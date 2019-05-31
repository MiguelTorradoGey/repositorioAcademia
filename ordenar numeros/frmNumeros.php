<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Escribir números</title>
    <?php
      if(isset($_GET['frmFlag'])){
        $flag = $_GET['frmFlag'];
        } else {
          $flag = 0;
        }
      if(isset($_GET['num1'])){
        $numero1 = $_GET['num1'];
        } else {
          $numero1 = "error";
        }
      if(isset($_GET['num2'])){
        $numero2 = $_GET['num2'];
        } else {
          $numero2 = "error";
        }
      if(isset($_GET['num3'])){
        $numero3 = $_GET['num3'];
        } else {
          $numero3 = "error";
        }
     ?>
  </head>
  <body>

    <?php
    if($flag == 0)
      {
      echo '<form class="frmEnviar" action="numerosOrdenados.php" method="post">
            <input type="text" name="frmFlag" value="" hidden>
            <p>
              <label for="text">NÚMERO 1</label>
              <input type="text" name="numero1" value="">
            </p>
            <p>
              <label for="text">NÚMERO 2</label>
              <input type="text" name="numero2" value="">
            </p>
            <p>
              <label for="text">NÚMERO 3</label>
              <input type="text" name="numero3" value="">
            </p>
            <input type="submit" name="" value="Ordenar">
          </form>';
        } else {
          echo '<form class="frmEnviar" action="numerosOrdenados.php" method="post">
                <input type="text" name="frmFlag" value="" hidden>
                <p>
                  <label for="text">NÚMERO 1</label>
                  <input type="text" name="numero1" value="'.$numero1.'">
                </p>
                <p>
                  <label for="text">NÚMERO 2</label>
                  <input type="text" name="numero2" value="'.$numero2.'">
                </p>
                <p>
                  <label for="text">NÚMERO 3</label>
                  <input type="text" name="numero3" value="'.$numero3.'">
                </p>
                <input type="submit" name="" value="Ordenar">
              </form>';
        }
     ?>


  </body>
</html>
