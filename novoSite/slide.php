<?php
  include 'links.php';
?>
<html>
  <head>
    <title></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="_css/slide.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <main id="slide">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="_img/slide/1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="_img/slide/2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="_img/slide/3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev" id="bLeft">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Voltar</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next" id="bright">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Avançar</span>
        </a>
        <ol class="carousel-indicators" id="marcadores">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </main>
  </body>
</html>
