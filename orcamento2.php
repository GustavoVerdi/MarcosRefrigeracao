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

<body style="background-color: #f2f2f2;">
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
  <div class="containeranuncio">
    <div class="formulario-quadro">
      <form id="orcamentoForm">
        <h2>Solicite um Orçamento</h2>
        <label for="equipamento">Marca e Modelo do Equipamento:</label>
        <input class="inputforms" type="text" name="equipamento" id="equipamento" placeholder="Marca e modelo do equipamento" required>
        <label for="adicionais">Descrição do Problema:</label>
        <textarea class="inputforms" name="adicionais" id="adicionais" placeholder="Descreva o problema aqui" rows="4" required></textarea>
        <label for="fotos">Selecione as fotos:</label>
        <input class="inputforms" type="file" name="fotos[]" id="fotos" multiple accept=".png, .jpg, .jpeg">
        <br>
        <button type="submit" id="enviarButton">Enviar Solicitação de Orçamento</button>
      </form>
    </div>
  </div>
  <script>
    document.getElementById("enviarButton").addEventListener("click", function (e) {
      if (!document.getElementById("orcamentoForm").checkValidity()) {
        // O formulário não é válido, não faz nada.
        return;
      }
      e.preventDefault(); // Evita o envio padrão do formulário
      // Exibe a mensagem
      alert("Orçamento enviado com sucesso!");
      // Redireciona para a página orcamento2.php
      window.location.href = "orcamento2.php";
    });
  </script>
</body>
</html>