<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php
    include "bootstrap.php";
     ?>
  </head>
  <body>
    <?php
    session_start();
    $_SESSION['pruebas'] = "aqui pon lo que quieras"; 
      ?>

    <a href="sesion2.php">
      <button type="button" class="btn" name="button">Siguiente</button>
    </a>

  </body>
</html>
