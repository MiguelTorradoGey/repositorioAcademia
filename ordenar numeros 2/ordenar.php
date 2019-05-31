<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ordenar Números</title>

    <?php
      function ordenar(){
        $valores = array(30,3,8,5,20,1,4,2,6,0);
        foreach ($valores as $reg) {
          $n = 0;
            while ($n+1 != count($valores)){
              if($valores[$n] < $valores[$n+1]){
                $aux = $valores[$n];
                $valores[$n] = $valores[$n+1];
                $valores[$n+1] = $aux;
              }
              $n++;
            }
          }
        foreach ($valores as $clave) {
          echo $clave."<br>";
        }
      }
    ?>
    <script type="text/javascript">
      function ordenarValores(){
        document.getElementById('result').innerHTML = '<?php echo ordenar(); ?>';
      }
    </script>

  </head>
  <body>
    <input type="submit" onclick="ordenarValores()" name="" value="Ordenar valores array">
    <br>
    <div id="result">

    </div>
    <?php

      echo "********* version con for *************** <br>";
      $numeros = array(2,3,1,5,7,8,6,9,10,0);
      for($i=count($numeros)-1;$i>0;$i--){
        for($n=0;$n<$i-1;$n++){
          if($numeros[$n]>$numeros[$n+1]){
            $auxi = $numeros[$n+1];
            $numeros[$n+1] = $numeros[$n];
            $numeros[$n] = $auxi;
          }
        }
       }
      foreach ($numeros as $clave => $valor) {
        echo $valor."<br>";
      }
     ?>


    <!-- <form class="frmEnviar" action="ordenar.php" method="post">
          <input type="text" name="frmFlag" value="" hidden>
          <p>
            <label for="text">NÚMERO 1</label>
            <input type="text" name="numero1" value="">
          </p>
          <p>
            <label for="text">NÚMERO 2</label>
            <input type="text" name="numero2" value="">
          </p>
          <p>
            <label for="text">NÚMERO 3</label>
            <input type="text" name="numero3" value="">
          </p>
          <p>
            <label for="text">NÚMERO 4</label>
            <input type="text" name="numero4" value="">
          </p>
          <p>
            <label for="text">NÚMERO 5</label>
            <input type="text" name="numero5" value="">
          </p>
          <input type="submit" name="" value="Ordenar">
        </form> -->

  </body>
</html>
