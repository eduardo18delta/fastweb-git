
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Estoque</title>

 <link href="css/style.css" rel="stylesheet">
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
     <li><a href="../login/logout.php">Sair</a></li>
    </ul>
   </div>
  </div>
 </nav>

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Itens do estoque</h2>
		</div>
		<div class="col-sm-6">
			
			<div class="input-group h2">
				<input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Itens">
				<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
			
		</div>
		<div class="col-sm-3">
			<a href="../produto/cadproduto.php" class="btn btn-primary pull-right h2">Novo Item</a>
		</div>
	</div> <!-- /#top -->
 
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">



<?php

include "../content/init.php";

	
$sql = "SELECT * FROM produtos";
$pesquisa = $pdo->prepare($sql);
$pesquisa->execute();
$produtos = $pesquisa->fetchAll(PDO::FETCH_OBJ);
$total_encontrados = $pesquisa->rowCount();

echo "
<br>
<table class='table table-striped' cellspacing='0' cellpadding='0'>
	<thead>
		<tr>
			<th>id</th>
			<th>Descrição</th>
			<th>Custo</th>
			<th>Venda</th>
			<th>Lucro</th>
			<th>Marca</th>
			<th>Categ</th>
			<th>Cod.Bar</th>
			<th>Forn.</th>
			<th>Quant.</th>
			<th>Est.</th>
			<th>Val</th>
			<th>Dest.</th>
			<th class='actions'>Ações</th>
		</tr>
	</thead>
";

foreach ($produtos as $lista) {

echo "	
<tbody>
	<tr>
		<td>$lista->id_produto</td>
		<td>$lista->descricao</td>
		<td>$lista->pre_custo</td>
		<td>$lista->pre_venda</td>
		<td>$lista->pre_lucro</td>
		<td>$lista->marca</td>
		<td>$lista->categoria</td>
		<td>$lista->cod_barras</td>
		<td>$lista->fornecedor</td>
		<td>$lista->qtd</td>
		<td>$lista->local_estoque</td>
		<td>$lista->validade</td>
		<td>$lista->destaque</td>
		<td class='actions'>
			<a class='btn btn-warning btn-xs' href='editar.php?id=$lista->id_produto'>Editar</a>
			<a class='btn btn-danger btn-xs'  href='#' data-toggle='modal' data-target='#delete-modal'>Excluir</a>
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



	
	<div id="bottom" class="row">
		<div class="col-md-12">
			<ul class="pagination">
				<li class="disabled"><a>&lt; Anterior</a></li>
				<li class="disabled"><a>1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
			</ul><!-- /.pagination -->
		</div>
	</div> <!-- /#bottom -->
 </div> <!-- /#main -->




<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
		<?php echo "<a class='btn btn-success botao' href='excluir.php?id=$lista->id_produto'>Sim</a>"?>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

<script src="../content/js/jquery.min.js"></script>
<script src="../content/js/bootstrap.min.js"></script>
</body>
</html>