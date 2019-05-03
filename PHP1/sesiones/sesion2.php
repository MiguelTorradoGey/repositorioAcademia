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
       if(isset($_SESSION['pruebas']))
       {
         echo $_SESSION['pruebas'];
       }
       else {
         echo "no existe la variable";
       }
       session_destroy();
     ?>

  </body>
</html>
