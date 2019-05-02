<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];

      if($usuario == "admin" && $clave == "123"){
        echo "Clave y usuario válido";
      } else {
        echo "Clave o el usuario no son válidos";
      }

      // echo "el usuario era: $usuario y la clave era: $clave";
     ?>
  </body>
</html>
