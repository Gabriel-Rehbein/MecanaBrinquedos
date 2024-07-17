<?php
// Incluir o arquivo de funções para conexão com o banco de dados e outras funções necessárias
require_once "functions.php";

// Variável para armazenar mensagens
$message = '';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
    $connect = mysqli_connect($server, $user, $pass, $dbName);
    if (!$connect) {
        $message = "Erro ao conectar ao banco de dados: " . mysqli_connect_error();
    } else {
        // Chamar a função login
        login($connect);
        
        // Fechar conexão com o banco de dados
        mysqli_close($connect);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Mecana Brinquedos</h1>
                <img src="imagens/logo.png" alt="Logo" class="logo-img">
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Página Inicial</a></li>
                    <li><a href="pelucias.php">Pelucias</a></li>
                    <li><a href="Madeira.php">Brinquedos de Madeira</a></li>
                    <li><a href="quebra.php">Quebra-Cabeças</a></li>
                    <li><a href="sobre.php">Sobre Nós</a></li>
                    <li><a href="suporte.php">Suporte e Ajuda</a></li>
                    <li><a href="faq.php">Fórum de Peguntas</a></li>
                    <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                    <li><a href="politica_devolucao.php">Devolução</a></li>
                    <li><a href="redes_sociais.php">Redes Sociais</a></li>
                    <li><a href="loginusuarios.php">Login</a></li>
                    <li><a href="login.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="search-bar">
        <?php if (!empty($message)): ?>
            <div class="message"><?php echo $message; ?></div>
            <a href="login.php" class="button">Tentar Novamente</a>
        <?php else: ?>
            <form action="login.php" method="POST">
                <fieldset>
                    <legend>Painel de Login</legend>
                    <input type="email" name="email" placeholder="Digite seu E-mail" required>
                    <input type="password" name="senha" placeholder="Insira sua senha" required>
                    <button type="submit" name="logar">Login</button>
                </fieldset>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
