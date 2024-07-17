<?php

require_once "functions.php";
// Conexão com o banco de dados (substitua pelos seus dados de conexão)
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "mecana";

// Criar conexão
$connect = mysqli_connect( $server, $user, $pass, $dbName );

// Verificar conexão
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

// Obter os dados do formulário
$produto_id = $_POST['produto_id'];
$usuario = $_POST['usuario'];
$avaliacao = $_POST['avaliacao'];
$comentario = $_POST['comentario'];

// Preparar a consulta SQL
$sql = "INSERT INTO avaliacoes (produto_id, usuario, avaliacao, comentario, data_avaliacao)
        VALUES ('$produto_id', '$usuario', '$avaliacao', '$comentario', NOW())";

// Executar a consulta
if ($connect->query($sql) === TRUE) {
    echo "Avaliação salva com sucesso!";
} else {
    echo "Erro ao salvar avaliação: " . $connect->error;
}

// Fechar conexão
$connect->close();
?>
