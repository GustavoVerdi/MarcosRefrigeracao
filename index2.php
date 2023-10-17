<?php
// Verifique se o usuário está logado (deve ser feito em todas as páginas protegidas)
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirecione para a página de login se o usuário não estiver logado
    header("Location: login.html");
    exit();
}
?>


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
      "./template/template4.jpg",
      "./template/template3.jpg",
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
  <div id="fototemplate">
    <img src="./template/template1.jpg" alt="Imagem 1" class="main-image" id="mainImage"
      onclick="openModal('./Template/template1.jpg')" style="width: 100%;height:250px;">
  </div>
  <br>
  <div class="line-container">
    <hr class="styled-line"> 
    <span class="line-label">Frigobares</span>
  </div>
  <Br>
  <section class="home-classe">
    <article class="art-home">
      <img src="./fotoproduto/produto1.jpg" alt="Carro 1">
      <h2>Frigobar 80 Litros 12/24v</h2>
      <p>Preço:R$3.448,50</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>
    <article class="art-home">
      <img src="./fotoproduto/produto2.jpg" alt="Carro 2">
      <h2>Frigobar 120 Litros 12/24v</h2>
      <p>Preço:R$ 1,584.99</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>
    <article class="art-home">
      <img src="./fotoproduto/produto3.jpg" alt="Carro 3">
      <h2>Frigobar Duplex 88 Litros 12/24v</h2>
      <p>Preço: R$3.790,50</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>
  </section>
  <br>
  <div class="line-container">
    <hr class="styled-line">
    <span class="line-label">Refrigeradores</span>
  </div>
  <br>
  <section class="home-classe">
    <article class="art-home">
      <img src="./fotoproduto/produto4.jpg" alt="peça 1" style="width: 100%;">
      <h2>Refrigerador Duplex 260 Litros 12/24</h2>
      <p>Preço: R$5.035,00</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>
    <article class="art-home">
      <img src="./fotoproduto/produto5.jpg" alt="Peça 2">
      <h2>Freezer 150 Litros Tampa Ilha</h2>
      <p>Preço:R$3.059,00</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>

    <article class="art-home">
      <img src="./fotoproduto/produto6.jpg" alt="Peça 3">
      <h2>Freezer 300 Litros Tampa Cega 12/24v</h2>
      <p>Preço: R$5.510,00</p>
      <a href="" class="botaohome" style="font-size: 11px;display: inline-block;">Mais Informações</a>
    </article>
  </section>
  <br>
</body>

</html>
