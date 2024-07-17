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
        
        // Verificar se foi enviado um novo arquivo de imagem
        if (!empty($_FILES['arquivo']['name'])) {
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
            } else {
                // Diretório onde será armazenada a imagem
                $caminho = "uploads/";
                
                // Verifica se o diretório existe, se não, tenta criá-lo
                if (!file_exists($caminho)) {
                    mkdir($caminho, 0777, true); // Cria o diretório recursivamente
                }

                // Nome único para o arquivo
                $novoNome = $id . "-" . $nomeArquivo;
                // Move o arquivo para o diretório de uploads
                if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
                    // Atualiza o caminho da imagem no banco de dados
                    $query_update = "UPDATE clientes SET nome = '$nome', email = '$email', nascimento = '$nascimento', imagem = '$caminho$novoNome' WHERE idcliente = '$id'";
                    if (mysqli_query($connect, $query_update)) {
                        echo "Informações do usuário atualizadas com sucesso!";
                        // Redireciona após editar
                        header("Location: listar_usuarios.php");
                        exit();
                    } else {
                        echo "Erro ao atualizar informações do usuário: " . mysqli_error($connect);
                    }
                } else {
                    echo "Erro ao enviar o arquivo!";
                }
            }
        } else {
            // Se nenhum arquivo foi enviado, apenas atualiza os outros campos
            $query_update = "UPDATE clientes SET nome = '$nome', email = '$email', nascimento = '$nascimento' WHERE idcliente = '$id'";
            if (mysqli_query($connect, $query_update)) {
                echo "Informações do usuário atualizadas com sucesso!";
                // Redireciona após editar
                header("Location: listar_usuarios.php");
                exit();
            } else {
                echo "Erro ao atualizar informações do usuário: " . mysqli_error($connect);
            }
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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Editar Usuário</h1>
            <nav>
                <ul>
                    <li><a href="listar_usuarios.php">Listar Usuários</a></li>
                    <li><a href="inserir_usuario.php">Inserir Novo Usuário</a></li>
                    <li><a href="upload_foto.php">Upload de Foto</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="search-bar">
        <form method="post" enctype="multipart/form-data">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" value="<?php echo $usuario['nome']; ?>" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $usuario['email']; ?>" required>
            <label for="nascimento">Data de Nascimento:</label>
            <input type="date" id="nascimento" name="nascimento" value="<?php echo $usuario['nascimento']; ?>" required>
            <label for="arquivo">Imagem de Perfil:</label>
            <input type="file" id="arquivo" name="arquivo">
            <img src="<?php echo $usuario['imagem']; ?>" alt="Imagem de Perfil" width="150">
            <input type="submit" name="editar" value="Editar">
        </form>
    </div>
</body>
</html>
