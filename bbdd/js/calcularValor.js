
// $(document).ready(function(){
//
//   $(".calcular").keyup(calcularTotal);
//   $(".calcular").click(calcularTotal);
//
//   function calcularTotal(){
//     var vUnidades = $("#unidades").val();
//     var vPrecio = $("#precio").val();
//
//     if(vPrecio != 0 && vUnidades != 0){
//     var resultado = vPrecio * vUnidades;
//     $("#total").val(resultado);
//     }
//   }
// });

// _____________________________  *** cualquiera de las dos formas funciona ***

$(document).ready(function(){
  $(".calcular").on('keyup click',function(){
    var resultado = $("#unidades").val() * $("#precio").val();
    $("#total").val(resultado);
  });
});
