<!DOCTYPE php>
<php lang="pt-br">
<head>
<title>Fast Web</title>
<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<script src="js/jquery.min.js"></script>
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
						<input type="text" placeholder="Procurar..." id="procurar" style="height:40px;border-radius:7px 0 0 7px; border:none;width:85%;float:left;">
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

<div class="container">
	<div class="check">
			 <h1>Meu carrinho de compras</h1>
		 <div class="col-md-9 cart-items">

				<script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});
					});
			   </script>
			 <div class="cart-header">
				 <div class="close1">X</div>
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/pi2.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">Tomate - Kg</h3>
						<ul class="qty">
							<li><p>Peso : 700 g</p></li>
							<li><p>Quantidade : 5</p></li>
						</ul>

							 <div class="delivery">
							 <p>Preço : <span style="color:red;"> R$ 1,75<span></p>
							 <!-- <span>Tempo estimado para entrega: 30 minutos</span> -->
							 <div class="clearfix"></div>
				        </div>
					   </div>
					   <div class="clearfix"></div>

				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close2').on('click', function(c){
							$('.cart-header2').fadeOut('slow', function(c){
						$('.cart-header2').remove();
					});
					});
					});
			 </script>
			 <div class="cart-header2">
				 <div class="close2">X</div>
				  <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="images/coca.jpg" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
						<h3><a href="#">CocaCola - Latinha - Un</a></h3>
						<ul class="qty">
							<!-- <li><p>Size : 5</p></li> -->
							<li><p>Quantidade : 6</p></li>
						</ul>
							 <div class="delivery">
							 <p>Preço: <span style="color:red;">R$ 30,00</span></p>
							 <!-- <span>Delivered in 2-3 bussiness days</span> -->
							 <div class="clearfix"></div>
				        </div>
					   </div>
					   <div class="clearfix"></div>

				  </div>
			  </div>
		 </div>
		  <div class="col-md-3 cart-total">
			 <a class="continue" href="#">Continue Comprando</a>
			 <div class="price-details">
				 <h3>Detalhes da Compra</h3>
				 <span>Total</span>
				 <span class="total1">R$ 31,75</span>
				 <span>Desconto</span>
				 <span class="total1">---</span>
				 <span>Taxa de Entrega</span>
				 <span class="total1">R$ 0,00</span>
				 <div class="clearfix"></div>
			 </div>
			 <ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>
			   <li class="last_price"><span>R$ 31,75</span></li>
			   <div class="clearfix"> </div>
			 </ul>


			 <div class="clearfix"></div>
			 <a class="order" href="#">Confirmar</a>
			 <div class="total-item">
				 <h3>OPÇÕES</h3>
				 <h4>CUPONS</h4>
				 <a class="cpns" href="#">Usar Cupom</a>
				 <p><a href="#">Login</a> para usar cupons</p>
			 </div>
			</div>

			<div class="clearfix"> </div>
	 </div>
	 </div>


<!--//content-->
<div class="footer">
	<div class="container">
		<div class="footer-top-at d-flex">
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
