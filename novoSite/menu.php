<!--===================MENU==================-->
<html>
  <head>
    <title></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="_css/menu.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <header>
      <nav class="d-flex justify-content-between align-items-center menu">
        <div class="barrasResp">
          <i class="fas fa-bars fa-2x ml-2"></i>
        </div>
        <div class="p-2 logo">
          <a href="#"><img src="_img/logo_redimencionada.png"/></a>
        </div>
        <div class="col-6 respDisplay">
          <form class="input-group align-middle buscar" >
            <input class="form-control buscar" type="text" placeholder="O que você procura?"/>
            <button type="submit" class="d-flex justify-content-center align-items-center pesquisar ">
              <i class='fas fa-search'></i>
            </button>
          </form>
        </div>
        <div class="d-flex align-items-center respDisplay">
          <a href="#" class="mr-2 respDisplay" id="linkUser"><i class="far fa-user-circle fa-2x respDisplay"></i></a>
          <span class="respDisplay">Olá, visitante!</span>
        </div>
        <div class="respFast">
          Fast<span class="respWeb">Web</span>
        </div>
        <div class="d-flex align-items-center respDisplay">
          <a href="#" class="mr-1 respDisplay">CADASTRE-SE</a> <span class="respDisplay">|</span> <a href="#" class="ml-1 respDisplay">LOGIN</a>
        </div>
        <div class="respSearch d-flex justify-content-center align-items-center">
          <i class="fas fa-search respSearch"></i>
        </div>
        <div class="d-flex justify-content-center align-items-center" id="divCarrinho">
          <a href="#" id="linkCarrinho"><i class="fas fa-shopping-cart"></i></a>
        </div>
      </nav>
      <div class="menuLateral">
        <div class="respLogin">
          <i class="far fa-user-circle "></i>Olá, visitante!
        </div>
        <ul>
          <li>Hortfruti</li>
          <li>Higiene e Limpeza</li>
          <li>Perfumaria</li>
          <li>Utilidades</li>
          <li>Padaria</li>
          <li>Açougue</li>
          <li>Enlatados</li>
        </ul>
      </div>
      <div class="fundoBlack">

      </div>
    <!--==============SUBMENU================-->
      <nav class="navbar navbar-expand-lg submenu">
        <button class="navbar-toggler" type="button" data-toggle="colapse" data-target="#navbarSite">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
          <ul class="navbar-nav">
            <li class="nav-item">
              <div class="dropdown show">
                <a class="nav-link dropdown-toggle" id="dropCategorias" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Todas as Categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropCategotias">
                  <a class="dropdown-item">Item</a>
                  <a class="dropdown-item">Item</a>
                  <a class="dropdown-item">Item</a>
                  <a class="dropdown-item">Item</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Açougue</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gelados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Limpeza</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Casa</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
  </body>
  <?php
    include 'links.php';
  ?>
</html>
