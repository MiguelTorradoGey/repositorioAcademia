<?php
 $servidor = "localhost";
 $usuario = "root";
 $baseDatos = "probas";
 $clave = "";

 try {
   $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos",$usuario,$clave);
   echo "Estoy conectado !!!!";

 } catch (PDOException $e) {
   echo "Error al conectar ".$e->getMessage();
 }



 ?>
