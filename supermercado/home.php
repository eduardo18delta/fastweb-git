<html>
	<head>
		<title>Fast Web</title>
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/slide.css">
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script type="text/javascript" href="js/slide.js"></script>

		<style type="text/css">
			*{
				padding:0;
				margin:0;
				box-sizing:border-box;
			}
			#logo{
				background-image: url('imagens/logos/logo.png');
			}
			#menu{
				background-color:#F52B2B;
				height:60px;
			}
			#menu ul li{
				list-style:none;
			}
			#ul-menu{
				/*background-color:blue;*/
				/*margin-top:20px;*/
			}
			#ul-menu li{
				margin-right:20px;
			}
			#ul-menu li a{
				color:#fff;
			}
			#categorias{
				color:#fff;
			}
			#form-busca{
				/*border:1px solid red;*/
				width:40%;
			}
			/*=================*/

			.prod{
				border:1px solid #000;
				width:23%;
				height:350px;
			}


		</style>
		<script>
      
    </script>
	</head>
	<body>
		<main class="">
			<nav class="navbard d-flex justify-content-around align-items-center" id="menu">
				<div id="categorias">
					Categorias
				</div>
				<div id="logo">
					
				</div>
				<form class="" id="form-busca">
					<div>
						<input type="text" name="" placeholder="O que você procura?" class="form-control">
					</div>
				</form>	
				<ul class="nav" id="ul-menu">
					<li class="nav-item"><a href="#">Login</a></li>
					<li class="nav-item"><a href="#">Cadastro</a></li>
					<li class="nav-item"><a href="#">Administrador</a></li>
					<li class="nav-item"><a href="#">Carrinho</a></li>
				</ul>
			</nav>
			<div class="" id="conteudo">
				<section id="slide">
        		<div id="esquerda">
          			&#9666;
        		</div>
        		<div id="direita">
          			&#9656;
        		</div>
        		<section id="banner">
          			<img src="_imgs/_site/_slide/banner.png" alt="1"/>
          			<img src="_imgs/_site/_slide/banner02.jpg" alt="2"/>
          			<img src="_imgs/_site/_slide/banner03.jpg" alt="3"/>
          			<img src="_imgs/_site/_slide/banner04.jpg" alt="4"/>
          			<img src="_imgs/_site/_slide/banner05.jpg" alt="5"/>
        		</section>
      			</section>

      			<div id="produtos-destaque">
      				<h2 class="text-center">Produtos em destaque</h2>
      				<div class="d-flex flex-row justify-content-around" id="produtos">
      					<div class="prod">
      						prod
      					</div>
      					<div class="prod">
      						prod
      					</div>
      					<div class="prod">
      						prod
      					</div>
      					<div class="prod">
      						prod
      					</div>
      				</div>
      			</div>
			</div>
			<footer class="">
			
			</footer>	
		</main>
	</body>
</html>