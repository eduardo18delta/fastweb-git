$("document").ready(function(){
  $("input[name='preco_venda']").blur(function(){
    var preco=$("input[name='preco_custo']").val()
    var venda=$("input[name='preco_venda']").val()
    var lucro=venda-preco
    $("input[name='pre_lucro']").val("R$ "+lucro+",00").html()
  })
})
