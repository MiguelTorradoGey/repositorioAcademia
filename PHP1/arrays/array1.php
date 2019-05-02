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
    <div class="jumbotron">
      <h1>Hello world</h1>
    </div>

    <?php
    $array = array();

    // Arrays clave-valor
    $array['nombre']='Juan';
    $array['apellidos']='Pérez';
    $array['direccion']='Ciudad';

    $alumnos = array();
    // $alumnos[0] = $array;
    array_push($alumnos, $array);
      $array['nombre']='Pepe';
      $array['apellidos']='Gutierrez';
      $array['direccion']='Aldea';
    // $alumnos[1] = $array;
    array_push($alumnos, $array);
      $array['nombre']='Manu';
      $array['apellidos']='Venitez';
      $array['direccion']='Pueblo';
    // $alumnos[1] = $array;
    array_push($alumnos, $array);

    // mostrar contenido del array en "crudo"
    print_r($array);
    echo "<br>";
    var_dump($array);

    echo "<br><br>";
    foreach ($array as $clave => $valor) {
      echo "<p>$clave : $valor</p>";
    }

    print_r($alumnos);
     ?>
  </body>
</html>
