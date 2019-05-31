<?php
  // Conectarnos a la session
  session_start();
  echo "<p>usuario: ".$_SESSION['usuario']."</p>";
  echo "<p>password: ".$_SESSION['clave']."</p>";

 ?>

<a href="varSessionDestroy.php">
  <button type="button" name="button">Destruir sesion</button>
</a>
