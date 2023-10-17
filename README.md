# MarcosRefrigeracao
Trabalho Desenvolvimento 

# Arquivo Padrão Site
```html
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
 <!--PEGAR NAVBAR NO TÓPICO A BAIXO-->
<!-- SE MUDAR O CÓDIGO FONTE DO NAV, ATUALIZAR AQUI -->
<footer>
Marcos Refrigerações @ 2023
</footer>
</body>

</html>
```
O HTML com final 1 Será a navbar com o botão de login, Segue código
```html
<nav>
    <ul class="menu">
      <li class="logo"><img class="logopag " src="./logo/logo.png" alt="Logo da Sua Empresa"><a href="#"></a></li>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="catalago.html">Catalago</a></li>
      <li class="item"><a href="orcamento.html">Orçamento</a></li>
      <li class="item button secondary"><a href="index2.html">Login</a></li>
      <li class="toggle"><span class="bars"></span></li>
    </ul>
  </nav>
  ```

O HTML com final 2 é com o usuário já logado
```html
<nav>
    <ul class="menu">
      <li class="logo"><img class="logopag " src="./logo/logo.png" alt="Logo da Sua Empresa"><a href="#"></a></li>
      <li class="item"><a href="index.html">Home</a></li>
      <li class="item"><a href="catalago.html">Catalago</a></li>
      <li class="item"><a href="orcamento.html">Orçamento</a></li>
      <li class="item"><a href="anuncio.html">Minha Conta</a></li>
      <li class="item button secondary"><a href="index.html">Sair</a></li>
      <li class="toggle"><span class="bars"></span></li>
    </ul>
</nav>
```
