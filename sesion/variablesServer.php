<?php
// Nombre de servidor
  echo "nombre servidor: ".$_SERVER['SERVER_NAME'];
  echo "<br>";
  echo "direccion servidor: ".$_SERVER['SERVER_ADDR'];
  echo "<br>";
  echo "datos servidor: ".$_SERVER['SERVER_SOFTWARE'];
  echo "<br>";
  echo "Timestamp del server: ".$_SERVER['REQUEST_TIME'];
  echo "<br>";
  echo "cadena de conexion: ".$_SERVER['QUERY_STRING'];
  echo "<br>";
  echo "User agent: ".$_SERVER['HTTP_USER_AGENT'];
  echo "<br>";
  echo "<h2>Ver mi IP publica, direccion remota: ".$_SERVER['REMOTE_ADDR']."</h2>";
  echo "<br>";
  // echo $_SERVER['REMOTE_HOST'];
  // echo "<br>";
  // echo $_SERVER['REMOTE_USER'];
  // echo "<br>";
  echo "administrador del server: ".$_SERVER['SERVER_ADMIN'];
  echo "<br>";
  echo "puerto servidor: ".$_SERVER['SERVER_PORT'];
  echo "<br>";


 ?>
