<?php

$id_client = $_GET['id'];


include 'init.php';
$confirmado = "<script>alert('Dados Salvos com sucesso!');</script>";

$sql = "SELECT * FROM cliente WHERE client_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id_client, PDO::PARAM_STR);
$stmt->execute();
$total_registros = $stmt->rowCount();
$perfis_clients = $stmt->fetchAll(PDO::FETCH_OBJ);


foreach ($perfis_clients as $perfil) {
    $client_id = $perfil->client_id;
    $name_frist = $perfil->client_frist_name;
    $name_last = $perfil->client_last_name;
    $email = $perfil->client_email;
    $client_datenasc = $perfil->cliente_date;
    $newsletter = $perfil->client_news;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Perfil - <?php echo $name_frist . " " . $name_last?></title>

 <link rel="stylesheet" href="http://localhost/fastweb/administrator/content/bootstrap/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="http://localhost/fastweb//administrator/content/bootstrap/css/bootstrap-theme.min.css"/>
 <style type="text/css">

body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}

</style>
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
    <a class="navbar-brand" href="#">Perfil Cliente</a>
   </div>
   <div id="navbar" class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-right">
     <li><a href="http://localhost/fastweb/supermercado/">FastWeb</a></li>
     <li><a href="../login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

<br>
<br>
<br>

<body>

<div class="container">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-6">
<div class="well well-sm">
<div class="row">
<div class="col-sm-6 col-md-4">
<img src="perfil.jpg" alt="" class="img-rounded img-responsive" />
</div>
<div class="col-sm-6 col-md-8">
<h4><?php echo $name_frist . " " . $name_last ?></h4>
<small>
<cite title="Amapá, BRASIL">Amapá, BRASIL 
<i class="glyphicon glyphicon-map-marker"></i>
</cite>
</small>

<p>
<i class="glyphicon glyphicon-envelope"></i><?php echo $email ?><br/>
                            
<i class="glyphicon glyphicon-ok"></i>Newsletter: <?php echo $newsletter ?><br/>

<i class="glyphicon glyphicon-calendar"></i><?php echo  $client_datenasc?>

</p>

</div>
</div>
</div>
</div>
</div>



<div class="row">
<div class="alert alert-success">Histórico de Compras</div>
</div>



<?php
$id_client = $_GET['id'];

include "init.php";

 
$sql = "SELECT 

produtos.id_produto,
produtos.descricao as nomeproduto,
cliente.client_frist_name,
cliente.client_last_name,
compras.forma_pagamento_fk,
compras.quantidade,
compras.valor_total,
compras.valor_pago,
forma_pagamento.descricao,
compras.data_compra

FROM 

produtos, compras, cliente, forma_pagamento

WHERE

produtos.id_produto = compras.produto_fk AND
cliente.client_id = compras.cliente_fk AND
forma_pagamento.id_pagamento = compras.forma_pagamento_fk AND
cliente_fk = :id";

$pesquisa = $pdo->prepare($sql);
$pesquisa->bindParam(':id', $id_client, PDO::PARAM_STR);
$pesquisa->execute();
$produtos = $pesquisa->fetchAll(PDO::FETCH_OBJ);
$total_encontrados = $pesquisa->rowCount();

echo "
<br>
<table class='table table-striped' cellspacing='0' cellpadding='0'>
  <thead>
    <tr>
      <th>id Cliente</th>
      <th>Produto</th>
      <th>Primeiro Nome</th>
      <th>Ultimo Nome</th>
      <th>Form. Pagamento</th>
      <th>Qtd</th>
      <th>Valor Total</th>
      <th>Valor Pago</th>
	  <th>Data Compra</th>
	  
      <th class='actions'>Ações</th>
    </tr>
  </thead>
";

foreach ($produtos as $lista) {

echo "  
<tbody>
  <tr>
    <td>$lista->id_produto</td>
    <td>$lista->nomeproduto</td>
    <td>$lista->client_frist_name</td>
    <td>$lista->client_last_name</td>
    <td>$lista->descricao</td>
    <td>$lista->quantidade</td>
    <td>$lista->valor_total</td>
    <td>$lista->valor_pago</td>
	<td>$lista->data_compra</td>
    <td class='actions'>
      <a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Ajuda</a>
    </td> 
  </tr>
</tbody>"; 

}

echo "
<tfoot>
  <tr>  
    <td id='td' colspan='7'><b>Total de Registros : $total_encontrados</b></td>
  </tr>
</tfoot>
</table>";?>




</div>


</body>
    