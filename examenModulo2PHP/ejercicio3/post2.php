<?php
  $mensaxe = $_POST['mensaxe'];

  if(strlen($mensaxe) < 50){
    echo "A mensaxe escrita foi: ".$mensaxe;
  } else {
    header('Location:form2.php?texto='.$mensaxe);
  }
 ?>
