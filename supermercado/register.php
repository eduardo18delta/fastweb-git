<!DOCTYPE php>
<php lang="pt-br">
<head>
<title>Fast Web</title>
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/valid_cad.js"></script>
<link rel="stylesheet" type="text/css" href="css/responsivo.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/php; charset=utf-8" />
<meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
<body>

<div class="header">
	<div class="header-top">
		<div id="logo">
			<a href="index.php"><img src="images/logo.png" alt=""></a>
		</div>
		<div class="container">
			<div class="search">
					<form class="">
						<input type="text" placeholder="Procurar..." id="procurar" style="height:40px;border-radius:7px 0 0 7px;width:85%;float:left; border:1px solid #DADADA;">
						<button type="submit" class="" id="botao-buscar"><i class='fas fa-search'></i></button>
					</form>
			</div>
			<div class="header-left">
					<ul>
						<li ><a href="login.php"  >Login</a></li>
						<li><a  href="register.php"  >Cadastrar-se</a></li>
						<li><a  href="../administrator/index.php"  >Administrador</a></li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> itens)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Esvaziar carrinho</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="">
			<div class="head-top logo-header">
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="index.php">Home</a></li>
				      <li><a class="color1" href="#">Categorias</a>
				      	<div class="mepanel">
						<div class="grid-top">
							<div class="col2">
								<div class="h_nav">
									<ul>
										<li><a href="products.php">Hortifruti</a></li>
										<li><a href="products.php">Açougue</a></li>
										<li><a href="products.php">Frios e Laticíneos</a></li>
										<li><a href="products.php">Adega</a></li>
										<li><a href="products.php">Papelaria</a></li>
										<li><a href="products.php">Padaria e Confeitaria</a></li>
										<li><a href="products.php">Para seu Animal</a></li>
										<li><a href="products.php">Produtos de Limpeza</a></li>
										<li><a href="products.php">Mercearia</a></li>
									</ul>
								</div>
							</div>
						  </div>
						</div>
					</li>
				<li><a class="color6" href="contact.php">Contato</a></li>
			  </ul>
			</div>

				<div class="clearfix"> </div>
		</div>
		</div>

	</div>


<!--content do Bootstrap-->
<div class=" container">
<div class=" register">

<!-- Cadatro do Usuario -->

<form method="post" action="add_cliente.php" class="d-flex" >

<div class="col-md-6 register-top-grid">
<h3>Informações Pessoais</h3>

<div>
<span>Primeiro Nome</span>
<input type="text" name="p_nome">
</div>

<div>
<span>Ultimo Nome</span>
<input type="text" name="u_nome">
</div>

<div>
<span>Email</span>
<input type="text" name="email_cad">
</div>
					   
<a class="news-letter" href="#">
<label class="checkbox"><input type="checkbox" name="novidades" value="1" checked=""><i></i>Deseja receber novidades?</label>
</a>

</div>

<div class="col-md-6 register-bottom-grid">
<h3>Informações de Login</h3>

<div>
<span>Senha</span>
<input type="password" name="senha_1">
</div>

<div>
<span>Confirmar Senha</span>
<input type="password" name="senha_2">
</div>

<input type="submit" value="Enviar" name="registrar">
<span id="msg">As senhas devem ser iguais</span>

</div>
<div class="clearfix"></div>
</form>
</div>
</div>

<!--//Footer-->
<div class="footer">
	<div class="container">
		<div class="mobile footer-top-at d-flex">
			<div class="col-md-4 amet-sed">
				<h4>MAIS INFORMAÇÕES</h4>
				<ul class="nav-bottom">
						<li><a href="#">Como Comprar</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="contact.php">Localização</a></li>
						<!-- <li><a href="#">Shipping</a></li> -->
						<li><a href="#">Empresa</a></li>
					</ul>
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTATO</h4>

					<!-- <p>Contrary to popular belief</p> -->
					<!-- <p>The standard chunk</p> -->
					<p>Escritório:  +55 96 00000-0000</p>
					<ul class="social">
						<li><a href="#"><i> </i></a></li>
						<li><a href="#"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="#"><i class="gmail"> </i></a></li>

					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>NOTÍCIAS</h4>
					<p>Inscreva-se para receber todas as novidades e promoções</p>
					<form>
						<input type="text" placeholder="E-mail" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Enviar">
					</form>
				</div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2018 POTM todos os direitos reservados | Design by  <a href="http://potm.com/" target="_blank">POTM</a> </p>
		</div>
		</div>
</body>
</html>

