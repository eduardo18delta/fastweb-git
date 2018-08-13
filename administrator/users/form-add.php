<?php
require 'init.php';
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Eduardo Henrique"/>
<meta name="description" content="Supermercado Web"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>Usuários Sistema - Add</title>

<link rel="shortcut icon" href="../img/shortcut/pdv.png"/>
<link rel="stylesheet" href="../content/css/menu.css"/>
<link rel="stylesheet" href="../content/bootstrap/css/bootstrap.css"/>


</head>

<body >

<div class="container-fluid">

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../menu.php">Supermercado Web</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="../menu.php">início</a></li>
     <li><a href="../estoque/estoque.php">Estoque</a></li>
     <li><a href="users/index.php">Usuários</a></li>
     <li><a href="../login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

<br>
<br>
<br>
 
    <body>
 
<div class="alert alert-success">Cadastro de Usuário</div>
         
<form action="add.php" method="post">
    
<div class="form-group">
<label>Nome: </label>
<input class="form-control" type="text" name="nome" id="name" required>
 </div>
    
<div class="form-group">
<label>cargo: </label>
<select class="form-control" name="cargo" required>
    <option value=""></option>
    <option value="Administrador">Administrador</option>
    <option value="Gerente">Gerente</option>
    <option value="Estoque">Estoque</option>
    <option value="Comum">Comum</option>
</select>

</div>

<div class="form-group">
<label>username:</label>
<input class="form-control" type="text" name="username" required>
</div>   

<div class="form-group">
<label>Password: </label>
<input class="form-control" type="text" name="password" required>
 
<div class="form-group">
<label>Email:</label> 
<input class="form-control"type="text" name="email" required>
</div>

<div class="form-group">
<input class="btn btn-success form-control" type="submit" value="Cadastrar">
</div>
</form>
 
</body>
</html>