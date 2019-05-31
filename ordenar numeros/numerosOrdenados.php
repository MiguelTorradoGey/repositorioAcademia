<?php
  $pos1 = $_POST['numero1'];
  $pos2 = $_POST['numero2'];
  $pos3 = $_POST['numero3'];

  $ord = array($pos1,$pos2,$pos3);
  rsort($ord);

  header('Location: frmNumeros.php?num1='.$ord[0].'&num2='.$ord[1].'&num3='.$ord[2].'&frmFlag=1');
 ?>
