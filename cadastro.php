<?php
$email = $_POST['email'];
$senha = md5($_POST['senha']); // Use md5 com cuidado, é uma hash fraca.
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];

// Conexão com o banco de dados MySQL usando MySQLi
$servername = 'nome_do_servidor';
$username = 'nome_de_usuario';
$password = 'senha';
$dbname = 'nome_do_banco_de_dados';

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Evite a injeção SQL usando instruções preparadas
$query_select = "SELECT email FROM usuarios WHERE email = ?";
$stmt = $conn->prepare($query_select);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$row_count = $stmt->num_rows;
$stmt->close();

if ($email == "" || $email == null) {
    echo "<script language='javascript' type='text/javascript'>
    alert('O campo E-mail deve ser preenchido');
    window.location.href='cadastro.html';</script>";
} else {
    if ($row_count > 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Esse E-mail já existe');
        window.location.href='cadastro.html';</script>";
        die();
    } else {
        $query = "INSERT INTO usuarios (email, senha, endereco, bairro, cep) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sssss", $email, $senha, $endereco, $bairro, $cep);
        
        if ($stmt->execute()) {
            echo "<script language='javascript' type='text/javascript'>
            alert('Usuário cadastrado com sucesso!');
            window.location.href='login.html'</script>";
        } else {
            echo "<script language='javascript' type='text/javascript'>
            alert('Não foi possível cadastrar esse usuário');
            window.location.href='cadastro.html'</script>";
        }
        $stmt->close();
    }
}

$conn->close();
?>
