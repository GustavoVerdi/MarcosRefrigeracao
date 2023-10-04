<?php
$servername = "db.fieetzlrzvwkfqozqpal.supabase.co";
$username = "postgres"; // Nome de usuário do banco de dados
$password = ""; // Senha do banco de dados
$dbname = "Marcos Refrigeração"; // Nome do banco de dados

// Criando uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Agora você pode executar consultas SQL ou realizar operações no banco de dados usando esta conexão.
