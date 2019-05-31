<?php
  // deben crearse siempre. Conectamos a sesion actual
  session_start();
   $_SESSION['usuario'] = $_POST['user'];
   $_SESSION['clave'] = $_POST['pass'];
 // Vamos a otra pantalla para mostrarlas
   header("location:varSessionVer.php");

 ?>
