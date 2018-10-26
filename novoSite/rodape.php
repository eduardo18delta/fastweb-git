<?php
  include 'links.php';
?>  
<style>
  .rdpInicio, .rdpFinal, .btnNovidades, .rdpEnd{
    background-color:#000;
    color:#fff;
  }
  .rdpInicio{
    height:100px;
  }
  .rdpFinal{
    /* height:450px; */
  }
  .btnNovidades{
    border-radius:0;
    border:1px solid #fff;
  }
  .icone{
    color:#fff;
  }
  .nomeNovidades{
    border-radius:0;
  }
  .sugestoesRdp{
    height:250px;
  }
  .sugestoesRdp, .rdpDev{
    background-color:rgb(54, 54, 54);
    color:#fff;
  }
  .rdpLancamentos,.rdpPaginas,.rdpMais{
    background-color:rgb(89, 89, 89);
    height:80%;
    width:30%;
    color:#fff;
  }
  .rdpLancamentos li,.rdpPaginas li,.rdpMais li, .rdpInstitucional li, .rdpAtendimento li{
    list-style:none;
  }
  .rdpLancamentos li a,.rdpPaginas li a,.rdpMais li a, .rdpInstitucional li a, .rdpAtendimento li{
    color:#fff;
  }
  .rdpPagamentos li{
    list-style:none;
    display:inline;
  }
  .imgProcon{
    width:25%;
  }
</style>
<footer>
  <div class="">
    <div class="d-flex px-4 justify-content-between align-items-center rdpInicio">
      <div>
        <h6>Não perca nenhuma novidade</h6>
        <p>Cadastre-se para receber notícias e lançamentos</p>
      </div>
      <div>
        <form class="input-group">
          <input class="form-control nomeNovidades" type="text" placeholder="Nome"/>
          <input class="form-control mx-3" type="email" placeholder="E-mail"/>
          <input type="submit" value="Enviar" class="btn btnNovidades"/>
        </form>
      </div>
      <div class="mr-5">
        <i class="fab fa-facebook fa-2x icone"></i>
        <i class="fab fa-twitter-square fa-2x icone"></i>
        <i class="fab fa-google-plus-square fa-2x icone"></i>
        <i class="fab fa-blogger fa-2x icone"></i>
      </div>
    </div>
    <div class="d-flex justify-content-center align-items-center sugestoesRdp">
      <div class="p-3 rdpLancamentos">
        <h6>Novidades</h6>
        <ul>
          <li><a href="#">Arroz</a></li>
          <li><a href="#">Feijão</a></li>
          <li><a href="#">Açougue</a></li>
          <li><a href="#">Gelados</a></li>
        </ul>
      </div>
      <div class="p-3 mx-3 rdpPaginas">
        <h6>Páginas Sugeridas</h6>
        <ul>
          <li><a href="#">Frutas</a></li>
          <li><a href="#">Ofertas Black</a></li>
          <li><a href="#">Oferta Padaria</a></li>
          <li><a href="#">Volta as Aulas</a></li>
        </ul>
      </div>
      <div class="p-3 rdpMais">
        <h6>Mais Acessados</h6>
        <ul>
          <li><a href="#">Produtos em Promoção</a></li>
          <li><a href="#">Cesta Básica</a></li>
          <li><a href="#">Açai</a></li>
          <li><a href="#">Padaria</a></li>
        </ul>
      </div>
    </div>
    <div class="p-4 rdpFinal">
      <div class="d-flex">
        <div class="rdpAtendimento">
          <h6>Atendimento</h6>
          <ul>
            <li>Segunda à Sexta: 08:00 às 18:00hr</li>
            <li><i class="fas fa-phone-volume icone"></i> (96)00000-0000</li>
            <li><i class="fas fa-envelope icone"></i> vendas@fastweb.com.br</li>
            <li><img src="_img/procon.jpg" class="imgProcon"/></li>
            <li>Para reclamações, <a href="#">clique aqui.</a></li>
          </ul>
        </div>
        <div class="mx-5 rdpInstitucional">
          <h6>Institucional</h6>
          <ul>
            <li><a href="#">Atendimento</a></li>
            <li><a href="#">A Empresa</a></li>
            <li><a href="#">Dúvidas</a></li>
            <li><a href="#">Como Pagar</a></li>
            <li><a href="#">Políticas de Troca</a></li>
            <li><a href="#">Políticas de Entrega</a></li>
            <li><a href="#">Políticas da Empresa</a></li>
            <li><a href="#">Políticas de Pagamento</a></li>
            <li><a href="#">Cód. de Defesa do Consumidor</a></li>
            <li><a href="#">Errata</a></li>
            <li><a href="#">Loja Confiável</a></li>
            <li><a href="#">Avaliações de Clientes</a></li>
            <li><a href="#">Envie seu Curriculo</a></li>
          </ul>
        </div>
        <div class="rdpPagamentos">
          <h6>Formas de Pagamento</h6>
          <ul>
            <li><i class="fas fa-money-bill-alt fa-2x"></i></li>
            <li><i class="fab fa-cc-mastercard fa-2x"></i></li>
            <li><i class="fab fa-cc-visa fa-2x"></i></li>
            <li><i class="fab fa-cc-amex fa-2x"></i></li>
            <li><i class="fab fa-cc-paypal fa-2x"></i></li>
            <li><i class="fab fa-cc-discover fa-2x"></i></li>
            <li><i class="fab fa-bitcoin fa-2x"></i></li>
          </ul>
        </div>
      </div>
      <div class="d-flex rdpEnd mt-5">
        <p>Administração Matriz: FAST WEB E-BUSINESS LTDA - CNPJ: 00.000.000/0000-00 - Rua Sucupira, 244 - Ipe - Macapá - AP - 68909034</p>
        <p>Centro de Distribuição: FAST WEB E-BUSINESS LTDA - CNPJ: 00.000.000/0000-00 - Rua Sucupira, 244 - Ipe - Macapá - AP - 68909034</p>
      </div>
    </div>
    <div class="p-3 d-flex flex-column align-items-center rdpDev">
      <p>Ofertas válidas enquanto durarem nossos estoques | Vesdas sujeitas a análise e confirmação de dados pela empresa. &copy; Direitos Reservados FastWeb.com.br</p>
      <p class="">Powered by Magnifícos</p>
    </div>
  </div>
</footer>
