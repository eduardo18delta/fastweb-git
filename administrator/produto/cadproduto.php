<?php
session_start();

require_once '../login/init.php';

require '../login/check.php';


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Adicionar produtos</title>

 <!--<link href="css/style.css" rel="stylesheet">-->
 <link rel="stylesheet" href="../content/css/cadastro.css"/>
 <link rel="stylesheet" href="../content/bootstrap/css/bootstrap.css"/>
</head>
<body>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-tarPOST="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../menu.php">Fast Web</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="../menu.php">Menu</a></li>
     <li><a href="../estoque/estoque.php">Estoque</a></li>
     <li><a href="../cliente/cliente.php">Clientes</a></li>
     <li><a href="../login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

 <div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar produtos</h3>

  <form method="post">

  	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label>Descrição:</label>
  	  	<input type="text" class="form-control" name="descricao" placeholder="Digite uma descrição" required="" >
  	  </div>
	  <div class="form-group col-md-3">
  	  	<label>Preço de Custo:</label>
  	  	<input type="number" class="form-control" name="preco_custo" placeholder="Digite o valor" required="">
  	  </div>

	  <div class="form-group col-md-3">
  	  	<label>Preço de Venda:</label>
  	  	<input type="number" class="form-control" name="preco_venda" placeholder="Digite o valor" required="">
  	  </div>

	   <div class="form-group col-md-3">
  	  	<label>Preço de Lucro:</label>
  	  	<input type="number" class="form-control" name="pre_lucro" placeholder="Digite o valor" required="">
  	  </div>

	</div>

	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label>Marca:</label>
  	  	<input type="text" class="form-control" name="marca" placeholder="Digite o Marca" required="">
  	  </div>


	<div class="form-group col-md-3">
		<label>Categoria:</label>
			<select class="form-control" name="categoria">
				<option Param=""></option>
				<option Param="Hortifruti">Hortifruti</option>
				<option Param="Açougue">Açougue</option>
				<option Param="Frios e Lacticínios">Frios e Lacticínios</option>
				<option Param="Adega">Adega</option>
				<option Param="Papelaria">Papelaria</option>
				<option Param="Padaria e Confeitaria">Padaria e Confeitaria</option>
				<option Param="Para seu animal">Para seu animal</option>
				<option Param="Limpeza">Limpeza</option>
				<option Param="Mercearia">Mercearia</option>
				<option Param="Mercearia">Higiene</option>
				<option Param="Mercearia">Bebidas</option>
			</select>
	</div>


	<div class="form-group col-md-3">
  	  	<label>Codigo de Barras</label>
  	  	<input type="number" class="form-control" name="cod_barras" placeholder="Digite o valor" required="">
  	</div>
	<div class="form-group col-md-3">
  	  	<label>Fornecedor:</label>
  	  	<input type="text" class="form-control" name="fornecedor" placeholder="Digite o fornecedor" required="">
  	  </div>
	</div>

	<div class="row">
  	  <div class="form-group col-md-3">
  	  	<label>Quantidade:</label>
  	  	<input type="number" class="form-control" name="quantidade" placeholder="Digite o valor" required="">
  	  </div>

	<div class="form-group col-md-3">
		<label>Local de estoque:</label>
			<select class="form-control" name="estoque">
				<option Param=""></option>
				<option Param="Estoque principal">Estoque principal</option>
				<option Param="Estoque Secundário">Estoque Secundário</option>
			</select>
	</div>

	  <div class="form-group col-md-3">
  	  	<label>Data de Validade:</label>
  	  	<input type="date" class="form-control" name="data_validade" placeholder="Digite o valor" required="">
  	  </div>
	  <div class="form-group col-md-2">
  	  	<label>Foto Produto:</label>
  	  	<input type="file" class="form-control" name="foto_prod" placeholder="Digite o valor">
  	  </div>
     <div class="form-group col-md-1">
        <label>Destaque:</label>
        <input type="checkbox" class="form-control" name="destaque" value="1">
      </div>
	</div>


	<hr />

	<div class="row">
	  <div class="col-md-12">
	  <input type="submit" class="btn btn-primary">
	  <input type="reset" class="btn btn-danger">
	  <a href="cadproduto.php" class="btn btn-warning">Novo<a/>
	  </div>
	</div>

<br>
<br>

  </form>
 </div>


<script src="../content/js/jquery.min.js"></script>
<script src="../content/js/cadproduto.js"></script>
<script src="../content/js/bootstrap.min.js"></script>



</body>
</html>



<?php

include '../content/init.php';
$confirmado = "<script>alert('Dados Salvos com sucesso!');</script>";




$sql = "INSERT INTO `produtos` VALUES (NULL,:descricao,:preco_custo,:preco_venda,:preco_lucro,:marca,:categoria,:cod_barras,:fornecedor,:quantidade,:estoque,:data_validade,:foto_prod, :destaque , CURRENT_TIMESTAMP)";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':descricao', $_POST['descricao'], PDO::PARAM_STR);
$stmt->bindParam(':preco_custo', $_POST['preco_custo'], PDO::PARAM_STR);
$stmt->bindParam(':preco_venda', $_POST['preco_venda'], PDO::PARAM_STR);
$stmt->bindParam(':preco_lucro',$_POST['pre_lucro'], PDO::PARAM_STR);
$stmt->bindParam(':marca', $_POST['marca'], PDO::PARAM_STR);
$stmt->bindParam(':categoria', $_POST['categoria'], PDO::PARAM_STR);
$stmt->bindParam(':cod_barras', $_POST['cod_barras'], PDO::PARAM_STR);
$stmt->bindParam(':fornecedor',  $_POST['fornecedor'], PDO::PARAM_STR);
$stmt->bindParam(':quantidade', $_POST['quantidade'], PDO::PARAM_STR);
$stmt->bindParam(':estoque',$_POST['estoque'], PDO::PARAM_STR);
$stmt->bindParam(':data_validade', $_POST['data_validade'], PDO::PARAM_STR);
$stmt->bindParam(':foto_prod', $_POST['foto_prod'], PDO::PARAM_STR);
$stmt->bindParam(':destaque', $_POST['destaque'], PDO::PARAM_STR);
$stmt->execute();
$total_registros = $stmt->rowCount();

if ($total_registros>=1) {
 echo $confirmado;
}


?>
