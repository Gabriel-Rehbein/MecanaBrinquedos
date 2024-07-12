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

// Verificar se o ID do usuário a ser editado foi enviado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query para selecionar usuário específico
    $query = "SELECT * FROM clientes WHERE idcliente = '$id'";
    $result = mysqli_query($connect, $query);
    $usuario = mysqli_fetch_assoc($result);

    // Processar formulário de edição
    if (isset($_POST['editar'])) {
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $nascimento = mysqli_real_escape_string($connect, $_POST['nascimento']);
        
        // Query para atualizar informações do usuário
        $query_update = "UPDATE clientes SET nome = '$nome', email = '$email', nascimento = '$nascimento' WHERE idcliente = '$id'";
        
        if (mysqli_query($connect, $query_update)) {
            echo "Informações do usuário atualizadas com sucesso!";
            // Redirecionar após editar
            header("Location: listar_usuarios.php");
            exit();
        } else {
            echo "Erro ao atualizar informações do usuário: " . mysqli_error($connect);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Editar Usuário</h1>
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
            <td class="logo-img"><img src="<?php echo $row['imagem']; ?>" alt="Imagem"></td>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" value="<?php echo $usuario['nascimento']; ?>" required>
            <input type="submit" name="editar" value="Editar">
        </form>
        
    </div>
</body>
</html>
