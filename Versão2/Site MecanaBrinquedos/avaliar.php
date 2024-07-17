<?php
session_start();
// Verificar se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: loginusuarios.php");
    exit;
}

// Conectar ao banco de dados
require_once "functions.php"; // Incluir arquivo de funções de banco de dados

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $comentario = mysqli_real_escape_string($connect, $_POST['comentario']);
    $nota = $_POST['nota'];
    $produto_id = $_POST['produto_id'];
    $usuario_id = $_SESSION['usuario_id'];

    // Inserir avaliação no banco de dados
    $query = "INSERT INTO avaliacoes (usuario_id, produto_id, comentario, nota) 
              VALUES ('$usuario_id', '$produto_id', '$comentario', '$nota')";
    $insert = mysqli_query($connect, $query);

    if ($insert) {
        echo "Avaliação enviada com sucesso!";
    } else {
        echo "Erro ao enviar avaliação: " . mysqli_error($connect);
    }
}
?>
