<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ejercicio 1</title>
    <?php
      include "bootstrap.php";
     ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $(".calcular").on('keyup click',function(){
          var resultado = $("#unid").val() * $("#prezo").val();
          $("#total").val(resultado);
        });
    });
    </script>
  </head>
  <body>
    <form class="" action="resultado1.php" method="get">
      <p>
        <label for="text">Nome de producto</label>
        <input type="text" name="nome" value="">
      </p>
      <p>
        <label for="text">Unidades</label>
        <input id="unid" class="calcular" type="number" name="unidades" value="">
      </p>
      <p>
        <label for="text">Prezo</label>
        <input id="prezo" class="calcular" type="number" name="prezo" value="">
      </p>
      <p>
        <label for="text">Total</label>
        <input id="total" type="text" name="total" value="">
      </p>
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
