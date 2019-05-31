<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Variables de sesion</title>
    <?php
       include "bootstrap.php";
     ?>
  </head>
  <body>
    <form class="" action="varSessioGuardar.php" method="post">
      <label for="user">User: </label>
      <input type="text" name="user" value="">
      <label for="pass">Password</label>
      <input type="text" name="pass" value="">
      <input type="submit" name="" value="Guardar">
    </form>

  </body>
</html>
