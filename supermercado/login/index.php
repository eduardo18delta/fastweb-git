<!DOCTYPE html>

<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Eduardo Henrique"/>
<meta name="description" content="Login - FastWeb"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Cliente</title>

<link rel="stylesheet" type="text/css" href="http://localhost/fastweb/administrator/content/bootstrap/css/bootstrap.min.css">

<style>

body{
background: linear-gradient(to right, #a90329 0%,#8f0222 44%,#6d0019 100%);
	
}

.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}

.branco{
	color: white;
	
}

</style>


</head>

<body>


<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title branco">Login para perfil do Cliente</h1>
            <div class="account-wall">
                <img class="profile-img" src="../images/logo_1.png" alt="">
                <form action="login.php" method="post" class="form-signin" autocomplete="off">
                <input type="text" name="email" class="form-control" placeholder="Insira o email">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                <a href="#" class="pull-right need-help">Esqueceu a senha?</a><span class="clearfix"></span>
                </form>
            </div>
            <a href="http://localhost/fastweb/supermercado/register.php" class="text-center new-account branco">Não é cadastrado? Crie uma conta.</a>
        </div>
    </div>
</div>



</body>
</html>
