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
			<a href="index.php"><img src="images/logo_1.png" alt=""></a>
		</div>
		<div class="container">
			<div class="search">
					<form class="">
						<input type="text" placeholder="  Procurar..." id="procurar" style="height:40px;border-radius:7px 0 0 7px; border:none;width:85%;float:left;">
						<button type="submit" class="" id="botao-buscar"><i class='fas fa-search'></i></button>
					</form>
			</div>
			<div class="header-left">
					<ul>
						<li ><a href="login/index.php">Login</a></li>
						<li><a  href="register.php">Cadastro</a></li>
						<li><a  href="../administrator/index.php">Admin</a></li>

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

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>

						<div class="banner-text">
							<h3>Fast Web, primeiro supermercado web do Amapá  </h3>
							<a href="single.php">Saiba Mais</a>
						</div>

				</li>
				<li>

						<div class="banner-text">
							<h3>Facilidade na palma da sua mão </h3>
							<a href="single.php">Saiba Mais</a>

						</div>

				</li>
				<li>
						<div class="banner-text">
							<h3>Inovando com a Fast Web</h3>
							<a href="single.php">Saiba Mais</a>

						</div>

				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
		<div class="content-top">
			<h1>NOVOS PRODUTOS</h1>
			<span id="esquerdo"><</span>
			<span id="direito">></span>
			<div class=" d-flex justify-content-center centro">
				<div class="teste">
					<img class="" src="images/pi.jpg" alt="">
					<div class="descricao">
						Picanha - Boi comum - Kg
						<div class="preco">R$ 20,00</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
				<div class="teste meio ">
					<img class="" src="images/pi1.jpg" alt="">
					<div class="descricao">
						Queijo Mussarela Frimesa - Kg
						<div class="preco">R$ 10,00</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
				<div class="teste ">
					<img class="" src="images/pi2.jpg" alt="">
					<div class="descricao">
						Tomate - Kg
						<div class="preco">R$ 2,50</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
		   	</div>
		</div>
		


	<div class="content-top-bottom">
		<h2>PRODUTOS EM DESTAQUE</h2>
		<span id="esquerdo"><</span>
		<span id="direito">></span>
		<div class="d-flex justify-content-center centro">
			<div class=" teste ">
				<img class="" src="images/t1.jpg" alt="">
				<div class="descricao">
					Fardo linguiça calabresa aurora
					<div class="preco">R$ 50,00</div>
				</div>
				<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
			</div>
			<div class=" teste meio ">
				<img class="" src="images/t2.jpg" alt="">
				<div class="descricao">
					Pacote de charqe Vilheto
					<div class="preco">R$ 15,00</div>
				</div>
				<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
			</div>
			<div class=" teste ">
				<img class="" src="images/t3.jpg" alt="">
				<div class="descricao">
					Fardo de salsicha hot dog Perdigão
					<div class="preco">R$ 25,00</div>
				</div>
				<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
			</div>
		</div>
	</div>

	<div class="content-top">
			<h1>OUTROS PRODUTOS</h1>
			<span id="esquerdo"><</span>
			<span id="direito">></span>
			<div class=" d-flex justify-content-center centro">
				<div class="teste">
					<img class="" src="images/t6.jpg" alt="">
					<div class="descricao">
						Feijão Preto - kicaldo- Kg
						<div class="preco">R$ 4,50</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
				<div class="teste meio ">
					<img class="" src="images/t4.jpg" alt="">
					<div class="descricao">
						Coca Cola - Latinha - 6 uni
						<div class="preco">R$ 5,00</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
				<div class="teste ">
					<img class="" src="images/t5.jpg" alt="">
					<div class="descricao">
						Arroz - Tio João - Kg
						<div class="preco">R$ 2,50</div>
					</div>
					<input type="button" name="comprar" value="Comprar" class="btn btn-primary comprar">
				</div>
		   	</div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>

	<!---->
	<div class="content-bottom">
		<ul>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo.png" alt=""></a></li>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo1.png" alt=""></a></li>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo2.png" alt=""></a></li>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo3.png" alt=""></a></li>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo4.png" alt=""></a></li>
			<li><a href="#"><img class="img-fluid" src="images/logos/lo5.png" alt=""></a></li>
		<div class="clearfix"> </div>
		</ul>
	</div>
</div>
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
		<p >© 2018 todos os direitos reservados | Design by  <a href="#" target="_blank">Fast Web</a> </p>
		</div>
		</div>
</body>
</php>
