$("document").ready(function(){
        setTimeout(function() {
	         $(".background-animacao").fadeOut('fast');}, 2600);
        $("#banner img:eq(0)").addClass("ativo").show()
        function slide(){
          if($(".ativo").next().length){
            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo")
          }else{
            $(".ativo").fadeOut().removeClass("ativo")
            $("#banner img:eq(0)").fadeIn().addClass("ativo")
          }
        }
        setInterval(slide, 4000)

        $("#direita").click(function(){
          if($(".ativo").next().length){
            $(".ativo").fadeOut().removeClass("ativo").next().fadeIn().addClass("ativo")
          }else{
            $(".ativo").fadeOut().removeClass("ativo")
            $("#banner img:eq(0)").fadeIn().addClass("ativo")
          }
        })
        $("#esquerda").click(function(){
          if($(".ativo").prev().length){
            $(".ativo").fadeOut().removeClass("ativo").prev().fadeIn().addClass("ativo")
          }else{
            $(".ativo").fadeOut().removeClass("ativo")
            $("#banner img:eq(4)").fadeIn().addClass("ativo")
          }
        })
      })