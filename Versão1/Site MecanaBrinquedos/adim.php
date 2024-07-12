<?php
// Verificar se a sessão está ativa
session_start();
if (!isset($_SESSION['email']) || $_SESSION['active'] !== true) {
    header("Location: adimlogin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
        <h1>Painel Administrativo</h1>
        <h2>Bem-Vindos Laisi e Gabriel!</h2>
            <nav>
                <ul>
                    <li><a href="listar_usuarios.php">Listar Usuários</a></li>
                    <li><a href="inserir_usuario.php">Inserir Novo Usuário</a></li>
                    <li><a href="editar_usuario.php">Editar Usuário</a></li>
                    <li><a href="excluir_usuario.php">Excluir Usuário</a></li>
                    <li><a href="upload_foto.php">Upload de Foto</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
            <nav>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="pelucias.php">Pelucias</a></li>
                <li><a href="Madeira.php">Brinquedos de Madeira</a></li>
                <li><a href="quebra.php">Quebra-Cabeças</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="suporte.php">Suporte e Ajuda</a></li>
                <li><a href="faq.php">Forum de Peguntas</a></li>
                <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                <li><a href="politica_devolucao.php">Devolução</a></li>
                <li><a href="redes_sociais.php">Redes Sociais</a></li>
                <li><a href="login.php">Cadastro</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="container">
    <section class="banner">
        <h1 class = banner-content>APENAS GABRIEL E LAISI TEM ACESSO!</h1>
        </section>
    </div>
</body>
</html>
