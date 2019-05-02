<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      .resultado{
        border: 1px solid black;
        padding: 20px;
        margin: 40px;
        width: 200px;
      }
    </style>
  </head>
  <body>
    <?php
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['Email'];
    // echo "NOMBRE: $nombre - APELLIDOS: $apellidos - DIRECCIÓN: $direccion - TELÉFONO: $telefono - EMAIL: $email";
   ?>
    <div class="resultado">
      <p>El nombre es: <?php echo $nombre ?></p>
      <p>El apellido es: <?php echo $apellidos ?></p>
      <p>La dirección es: <?php echo $direccion ?></p>
      <p>El teléfono es: <?php echo $telefono ?></p>
      <p>El mail es: <?php echo $email ?></p>
     </div>
  </body>
</html>
