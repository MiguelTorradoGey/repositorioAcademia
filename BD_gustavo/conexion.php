<?php
  $servidor = "localhost";
  $usuario= "root";
  $baseDatos = "probas";
  $clave="";

  try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario, $clave);
  

  } catch (PDOException $e) {
      echo "Error al conectar ".$e->getMessage();
  }



 ?>
