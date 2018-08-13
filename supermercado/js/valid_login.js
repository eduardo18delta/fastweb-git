/*======LOGIN-VAZIO======*/
$("document").ready(function(){
  $("input#entrar").click(function(){
    if($("input[name='email']").val()==""){
      $("input[name='email']").css("border","1px solid rgb(250, 22, 0)")

    }else{
        $("input[name='email']").css("border","1px solid #A09F9F")
    }
    if($("input[name='senha']").val()==""){
      $("input[name='senha']").css("border","1px solid rgb(250, 22, 0)")

    }else{
        $("input[name='senha']").css("border","1px solid #A09F9F")
    }
    return false;
  })

})
