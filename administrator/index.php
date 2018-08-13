<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Eduardo Henrique"/>
<meta name="description" content="FastWeb - SupermercadoWeb"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>FastWeb - Login Admin</title>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="content/css/login.css">

</head>

<body>

<main>

<form  method="post" action="login/login.php">

<div class="login-form">
<div class="form-group ">
<input type="text" class="form-control" placeholder="Usuário ou Email" name="username"><i class="fa fa-user"></i>
</div>
<div class="form-group log-status">
<input type="password" class="form-control" placeholder="Senha" name="password"><i class="fa fa-lock"></i>
</div>
<a class="link" href="#">Esqueceu sua senha?</a>

<input class="log-btn" type="submit" value="Login"><br><br>
<a class="log-btn" href="http://127.0.0.1/fastweb-git/supermercado/">Ir à loja</a> 

</div>
</form>

</main>

</body>
</html>
