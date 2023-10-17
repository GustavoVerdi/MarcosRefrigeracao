<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="custom.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="script.js"></script>

  <title>Marcos Refrigeração</title>

  <link rel="website icon" type="png" href="./logo/logo.png">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script>
    $(function () {
      $(".toggle").on("click", function () {
        if ($(".item").hasClass("active")) {
          $(".item").removeClass("active");
        } else {
          $(".item").addClass("active");
        }
      });
    });
    // Array de URLs das imagens
    var images = [
      "./template/template1.jpg",
      "./template/template2.jpg",
      // Adicione mais URLs de imagens conforme necessário
    ];

    var currentIndex = 0;
    var interval = 2000; // 2 segundos

    function changeImage() {
      var mainImage = document.getElementById("mainImage");
      mainImage.src = images[currentIndex];
      currentIndex = (currentIndex + 1) % images.length;
    }

    // Iniciar o carrossel
    setInterval(changeImage, interval);

  </script>
</head>

<body>
  <!-- Menu -->
  <nav>
    <ul class="menu">
    <li class="logo"><img class="logopag " src="./logo/logo.png" alt="Logo da Sua Empresa"><a href="#"></a></li>
      <li class="item"><a href="index2.php">Home</a></li>
      <li class="item"><a href="catalogo2.php">Catalago</a></li>
      <li class="item"><a href="orcamento2.php">Orçamento</a></li>
      <li class="item"><a href="minhaconta.php">Minha Conta</a></li>
      <li class="item button secondary"><a href="index.html">Sair</a></li>
      <li class="toggle"><span class="bars"></span></li>
    </ul>
  </nav>
  <br>

  <!-- Campo Busca -->
  <div>
    <input type="text" id="search-bar" placeholder="Busca">
    <a href="#"><img class="search-icon"
        src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a>
  </div>
  <br>

  <!-- Titulo -->
  <div class="line-container">
    <span class="line-label">CATALOGO</span>
  </div>

  <!-- Vitrine -->
  <div class="campoVitrine">
    <section class="product-list">
      <article class="product">
        <!-- Imagem -->
        <img src="./fotoproduto/produto1.jpg" alt="frio01">
        <!-- Titulo -->
        <h2>Frigorbar 120L 12/24v</h2>
        <!-- Valor -->
        <p><b>R$ 3.505,50</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 615,00 no cartão s/ juros</p><br>
        <a href="Detalhes.html" class="botao">Mais Informações</a>
      </article>

      <article class="product">
        <img src="./fotoproduto/produto2.jpg" alt="frio02">
        <!-- Titulo -->
        <h2>Frigorbar 80L 12/24v</h2>
        <!-- Valor -->
        <p><b>R$ 3.448,50</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 605,00 no cartão s/ juros</p><br>
        <a href="Detalhes.html" class="botao">Mais Informações</a>
      </article>

      <article class="product">
        <img src="./fotoproduto/produto3.jpg" alt="frio03">
        <!-- Titulo -->
        <h2>Frigobar Duplex 88L 12/24v</h2>
        <!-- Valor -->
        <p><b>R$ 3.790,50</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 665,00 no cartão s/ juros</p><br>
        <a href="Detalhes2.html" class="botao">Mais Informações</a>
      </article>

      <article class="product">
        <img src="./fotoproduto/produto4.jpg" alt="frio04">
        <!-- Titulo -->
        <h2>Refrigerador Duplex 260L 12/24v</h2>
        <!-- Valor -->
        <p><b>R$ 5.035,50</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 883,33 no cartão s/ juros</p><br>
        <a href="Detalhes.html" class="botao">Mais Informações</a>
      </article>

      <article class="product">
        <img src="./fotoproduto/produto5.jpg" alt="frio05">
        <!-- Titulo -->
        <h2>Caixa Térmica 90L</h2>
        <!-- Valor -->
        <p><b>R$ 893,00</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 235,00 no cartão s/ juros</p><br>
        <a href="Detalhes.html" class="botao">Mais Informações</a>
      </article>

      <article class="product">
        <img src="./fotoproduto/produto6.jpg" alt="frio06">
        <!-- Titulo -->
        <h2>Freezer 300 Litros com Tampa 12/2</h2>
        <!-- Valor -->
        <p><b>R$ 3.505,50</b> no PIX</p>
        <!-- Quantidade no Cartão-->
        <p>6x de R$ 615,00 no cartão s/ juros</p><br>
        <a href="Detalhes.html" class="botao">Mais Informações</a>
      </article>

      </article>
    </section>'
  </div>
</body>

</html>
