<?php
session_start();

require_once 'login/init.php';

require 'login/check.php';


?>


<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8"/>
<meta name="author" content="Projeti- Faculdade Meta"/>
<meta name="description" content="Minha Loja - sistema de gestão"/>
<meta name="keywords" content="sistema,PDV,desenvolvimento,gestão"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<title>Fast Web - Admin</title>

<link rel="shortcut icon" href="img/shortcut/pdv.png"/>
<link rel="stylesheet" href="content/css/menu.css"/>
<link rel="stylesheet" href="content/bootstrap/css/bootstrap.css"/>


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
    <a class="navbar-brand" href="#">Fast Web</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="#">Início</a></li>
     <li><a href="estoque/estoque.php">Estoque</a></li>
     <li><a href="users/index.php">Usuários</a></li>
     <li><a href="../supermercado/index.php">Acessar site</a></li>
     <li><a href="login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

<br>
<br>
<br>

<div class="alert alert-success" role="alert">
  Escolha uma opção:
</div>


<div class="row">
  <div class="col-xs-6 col-md-3" style="text-align:center;">
   <a href="cliente/index.php" class="thumbnail" title="Cadastro Cliente"><img src="img/list_client.png">Clientes</a>
</div>

<div class="col-xs-6 col-md-3" style="text-align:center;">
    <a class="thumbnail" href="produto/cadproduto.php" title="Cadastro Produto"><img src="img/product.png">Cadastrar Produtos</a>
</div>

<div class="col-xs-6 col-md-3" style="text-align:center;">
    <a class="thumbnail" href="pdv/index.php" title="Acessar Vendas"><img src="img/cashier.png">Vizualizar vendas</a>
</div>

<div class="col-xs-6 col-md-3" style="text-align:center;">
   <a class="thumbnail" href="estoque/estoque.php" title="Acessar Estoque"><img src="img/list.png">Estoque</a>
</div>

</div>

<div class="row">


<div class="col-xs-6 col-md-3" style="text-align:center;">
   <a class="thumbnail" href="report/relatorio_de_vendas.pdf" title="Acessar Relatórios"><img src="img/report.png">Relatórios</a>
</div>

<div class="col-xs-6 col-md-3" style="text-align:center;">
   <a class="thumbnail" href="users/index.php" title="Gerenciamento de Usuários"><img src="img/user_system.png">Users Sistema</a>
</div>

<div class="col-xs-6 col-md-3" style="text-align:center;">
   <a class="thumbnail" href="login/logout.php" title="Sair do Sistema"><img src="img/logout.png">Sair do Sistema</a>
</div>
</div>

</div>

<br>
<br>
<br>

<div class="navbar navbar-inverse navbar-fixed-bottom footer1">
	<div class="footer-class" style="color: white; padding-top:10px; text-align:center;">
	<p>© 2018 todos os direitos reservados | <a href="ttp://127.0.0.1/fastweb-git/supermercado/" target="_blank">Fast Web</a> </p>
	</div>
</div>

</body>
</html>
