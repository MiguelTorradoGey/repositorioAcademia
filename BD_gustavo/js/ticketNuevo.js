function calcularTotal(){
  var unidades = $("#unidades").val();
  var precio = $("#precio").val();
  
  $("#total").val(unidades * precio);
}

$(document).ready(function(){
  $(".valores").change(function(){
      calcularTotal();
  });
})
