$("document").ready(function(){
  $("#msg").hide()
  $("input[name='p_nome']").blur(function(){
    if($("input[name='p_nome']").val()==""){
      $("input[name='p_nome']").attr("placeholder","Informe seu primeiro nome")
      $("input[name='p_nome']").css("border", "1px solid rgb(250, 22, 0)")
      // $("input[name='p_nome']").css("color", "rgb(250, 22, 0)")
    }else{
      $("input[name='p_nome']").css("border", "1px solid #A09F9F")
    }
    })

  $("input[name='u_nome']").blur(function(){
    if($("input[name='u_nome']").val()==""){
      $("input[name='u_nome']").attr("placeholder","Informe seu último nome")
      $("input[name='u_nome']").css("border","1px solid rgb(250, 22, 0)")
    }else{
      $("input[name='u_nome']").css("border", "1px solid #A09F9F")
    }
  })

  $("input[name='email_cad']").blur(function(){
    if($("input[name='email_cad']").val()==""){
      $("input[name='email_cad']").attr("placeholder","Informe seu e-mail")
      $("input[name='email_cad']").css("border","1px solid rgb(250, 22, 0)")
    }else{
      $("input[name='email_cad']").css("border", "1px solid #A09F9F")
    }
  })

  $("input[name='senha_1']").blur(function(){
    var senha_1=$("input[name='senha_1']").val()
    if(senha_1==""){
      $("input[name='senha_1']").attr("placeholder","Crie uma senha")
      $("input[name='senha_1']").css("border","1px solid rgb(250, 22, 0)")
    }else{
      $("input[name='senha_1']").css("border", "1px solid #A09F9F")
    }
  })

  $("input[name='senha_2']").blur(function(){
    var senha_1=$("input[name='senha_1']").val()
    var senha_2=$("input[name='senha_2']").val()
    if(senha_2!=senha_1){
      $("#msg").show()
	  $("#msg").css("color","rgb(250, 22, 0)")
	  $("#msg").css("float","right")
      $("input[name='senha_2']").css("border","1px solid rgb(250, 22, 0)")
      return false
    }else{
      $("input[name='senha_2']").css("border", "1px solid #A09F9F")
      $("#msg").hide()
    }

  })
  $("input[name='registrar']").click(function(){
    var senha_1=$("input[name='senha_1']").val()
    var senha_2=$("input[name='senha_2']").val()
    if(senha_2!=senha_1){
      $("#msg").show()
      $("input[name='senha_2']").css("border","1px solid rgb(250, 22, 0)")
      return false
    }else{
      $("input[name='senha_2']").css("border", "1px solid #A09F9F")
      $("#msg").hide()
    }
  })
    return false;

})
