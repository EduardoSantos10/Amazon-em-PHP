<?php

    namespace PHP\Modelo;

?>

<!Doctype HTML>

<head>

    <meta charset="UTF-8">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<body>

    
    <a href="Index.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Selecionar Livro</a>
    <a href="ConsultarCodigo.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Consultar Pedido</a>
    <a href="PaginaAtualizar.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Atualizar Carrinho</a>
    <a href="PaginaExcluir.php" class="btn btn-primary enable" tabindex="-1" role="button" aria-disabled="false">Excluir Pedido</a>
    <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://slidechef.net/wp-content/uploads/2021/12/amazon-template.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://slidechef.net/wp-content/uploads/2021/12/Amazon-Mission-Template.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://slidechef.net/wp-content/uploads/2021/12/Free-Amazon-Thank-You.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>
    
</body>

</html>