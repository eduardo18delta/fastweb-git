<!--===================MENU==================-->
<header>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <nav class="d-flex justify-content-between align-items-center menu">
    <div class="p-2">
      <a href="#"><img src="_img/logo_redimencionada.png"/></a>
    </div>
    <div class="col-6">
      <form class="input-group align-middle buscar" >
        <input class="form-control buscar" type="text" placeholder="O que você procura?"/>
        <span class="btn d-flex justify-content-center align-items-center pesquisar ">
          <i class='fas fa-search'></i>
        </span>
      </form>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="mr-2" id="linkUser"><i class="far fa-user-circle fa-2x"></i></a><span >Olá, visitante!</span>
    </div>
    <div class="d-flex align-items-center">
      <a href="#" class="mr-1">CADASTRE-SE</a> | <a href="#" class="ml-1">LOGIN</a>
    </div>
    <div class="d-flex justify-content-center align-items-center" id="divCarrinho">
      <a href="#" id="linkCarrinho"><i class="fas fa-shopping-cart"></i></a>
    </div>
  </nav>
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
<?php
  include 'links.php';
?>
