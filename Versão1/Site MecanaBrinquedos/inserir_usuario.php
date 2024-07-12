<?php
// Conectar ao banco de dados
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "mecana";
$connect = mysqli_connect($server, $user, $pass, $dbName);

// Verificar conexão
if (!$connect) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Processar formulário de inserção
if (isset($_POST['inserir'])) {
    $nome = mysqli_real_escape_string($connect, $_POST['nome']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Hashear a senha
    $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);

    // Query para inserir novo usuário
    $query = "INSERT INTO clientes (nome, email, senha, situacao, nascimento) 
              VALUES ('$nome', '$email', '$senha', 0, '$nascimento')";
    
    if (mysqli_query($connect, $query)) {
        echo "Usuário inserido com sucesso!";
    } else {
        echo "Erro ao inserir usuário: " . mysqli_error($connect);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Novo Usuário</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Inserir Novo Usuário</h1>
            <h2>Bem-Vindos Laisi e Gabriel!</h2>
            <nav>
                <ul>
                    <li><a href="listar_usuarios.php">Listar Usuários</a></li>
                    <li><a href="inserir_usuario.php">Inserir Novo Usuário</a></li>
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
    <div class="search-bar">
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" required>
            <input type="submit" name="inserir" value="Inserir Usuário">
        </form>
    </div>
</body>
</html>

<?php
// Fechar conexão
mysqli_close($connect);
?>
