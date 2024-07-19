<?php
// Conectar ao banco de dados
$server = "127.0.0.1";
$user = "u285025226_gabriel";
$pass = "Senha20022992";
$dbName = "u285025226_mecana";
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

    // Upload de imagem
    $caminhoImagem = uploadImagem();

    if (!$caminhoImagem) {
        echo "Erro ao fazer upload da imagem. O usuário foi cadastrado sem imagem.";
        $caminhoImagem = "uploads/default.png"; // Caminho padrão caso não seja enviado uma imagem válida
    }

    // Verificar se o email já está cadastrado
    $query_verifica_email = "SELECT * FROM clientes WHERE email = '$email'";
    $result_verifica_email = mysqli_query($connect, $query_verifica_email);
    if (mysqli_num_rows($result_verifica_email) > 0) {
        echo "Erro ao inserir usuário: Este email já está sendo utilizado.";
    } else {
        // Query para inserir novo usuário
        $query = "INSERT INTO clientes (nome, email, senha, situacao, nascimento, imagem) 
                  VALUES ('$nome', '$email', '$senha', 0, '$nascimento', '$caminhoImagem')";
        
        if (mysqli_query($connect, $query)) {
            echo "Usuário inserido com sucesso!";
        } else {
            echo "Erro ao inserir usuário: " . mysqli_error($connect);
        }
    }
}

// Função para realizar o upload da imagem
function uploadImagem() {
    $caminho = "uploads/";
    $nomeArquivo = $_FILES['arquivo']['name'];
    $tipo = $_FILES['arquivo']['type'];
    $nomeTemporario = $_FILES['arquivo']['tmp_name'];
    $tamanho = $_FILES['arquivo']['size'];
    $erros = array();

    $tamanhoMaximo = 1024 * 1024 * 5; // 5MB
    if ($tamanho > $tamanhoMaximo) {
        $erros[] = "Seu arquivo excede o tamanho máximo.<br>";
    }

    $arquivosPermitidos = ["png", "jpg", "jpeg"];
    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
    if (!in_array($extensao, $arquivosPermitidos)) {
        $erros[] = "Arquivo não permitido.<br>";
    }

    $typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
    if (!in_array($tipo, $typesPermitidos)) {
        $erros[] = "Tipo de arquivo não permitido.<br>";
    }

    if (!empty($erros)) {
        foreach ($erros as $erro) {
            echo $erro;
        }
        return false;
    } else {
        $novoNome = uniqid() . '-' . $nomeArquivo;
        if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
            return $caminho . $novoNome;
        } else {
            echo "Erro ao enviar o arquivo!";
            return false;
        }
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
                    <li><a href="faq.php">Forum de Perguntas</a></li>
                    <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                    <li><a href="politica_devolucao.php">Devolução</a></li>
                    <li><a href="redes_sociais.php">Redes Sociais</a></li>
                    <li><a href="login.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="search-bar">
        <form method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" required>
            <label for="arquivo">Foto de Perfil:</label>
            <input type="file" id="arquivo" name="arquivo">
            <input type="submit" name="inserir" value="Inserir Usuário">
        </form>
    </div>
</body>
</html>

<?php
// Fechar conexão
mysqli_close($connect);
?>
