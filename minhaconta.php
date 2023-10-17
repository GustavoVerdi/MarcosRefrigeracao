<?php
// Verifique se o usuário está logado (deve ser feito em todas as páginas protegidas)
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
// Adicione isso para depuração

// Conecte-se ao banco de dados e consulte as informações do usuário
$servername = '127.0.0.1'; // Endereço do servidor MySQL
$username = 'root'; // Nome de usuário do MySQL
$password = '';   // Senha do MySQL (se aplicável)
$dbname = 'marcosbanco'; // Nome do banco de dados

// Conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];

$query = "SELECT nome, email, endereco, bairro, cep FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($nome, $email, $endereco, $bairro, $cep);
$stmt->fetch();

// Feche a conexão com o banco de dados

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
        // Função para mostrar a mensagem
        function mostrarMensagem() {
            alert("Alteração de senha enviada via E-mail.");
        }
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
        <form action="minhaconta.php" method="POST" enctype="multipart/form-data">
          <h2>Minha Conta</h2>
          <label for="nome">Nome Completo:<?php echo $nome;?></label>
          <label for="email">E-mail:<?php echo $email; ?></label>  
          <br> 
          <h2>Meu Endereço</h2>       
          <label for="nome">Endereço:<?php echo $endereco; ?></label>
          <label for="nome">Bairro:<?php echo $bairro; ?></label>
          <label for="nome">Cep:<?php echo $cep; ?></label>
          <br>
          <button type="button" id="enviarButton" onclick="mostrarMensagem()">Redefinir Senha</button>

      </form>
      </div>
  </div>
</body>
</html>
