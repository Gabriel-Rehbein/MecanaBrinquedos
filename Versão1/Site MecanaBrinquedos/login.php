<?php
// Incluir o arquivo de funções para conexão com o banco de dados e outras funções necessárias
require_once "functions.php";

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conectar ao banco de dados
   
    login($connect); // Supondo que conectar() está definido em functions.php

    // Verificar se o botão de cadastro foi clicado
    if (isset($_POST['cadastrar'])) {
        // Capturar e escapar os dados do formulário
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $email = mysqli_real_escape_string($connect, $email);
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $nascimento = date('Y-m-d H:i:s'); // Supondo que nascimento seja uma data/hora

        // Verificar e processar a imagem, se fornecida
        $imagem = '';
        if (!empty($_FILES['arquivo']['name'])) {
            $caminho = "imagens/uploads/";
            $imagem = uploadImage($caminho);
        }

        // Preparar e executar a consulta SQL para inserir o usuário
        $query = "INSERT INTO clientes (nome, email, senha, nascimento, imagem) VALUES ('$nome', '$email', '$senha', '$nascimento', '$imagem')";
        $insert = mysqli_query($connect, $query);

        // Verificar se o registro foi inserido com sucesso
        if ($insert) {
            echo "Usuário Cadastrado com Sucesso!";
        } else {
            echo "Erro ao Cadastrar usuário: " . mysqli_error($connect);
        }
    }

    // Verificar se o botão de upload foi clicado
    if (isset($_POST['enviar'])) {
        // Verificar se um arquivo foi selecionado
        if (!empty($_FILES['arquivo']['name'])) {
            // Diretório onde os arquivos serão salvos
            $caminho = "uploads/";

            // Nome original do arquivo
            $nomeArquivo = $_FILES['arquivo']['name'];

            // Tipo do arquivo
            $tipo = $_FILES['arquivo']['type'];

            // Nome temporário do arquivo
            $nomeTemporario = $_FILES['arquivo']['tmp_name'];

            // Tamanho do arquivo
            $tamanho = $_FILES['arquivo']['size'];

            // Array para armazenar mensagens de erro
            $erros = array();

            // Tamanho máximo permitido (5MB)
            $tamanhoMaximo = 1024 * 1024 * 5; // 5MB

            // Verificar o tamanho do arquivo
            if ($tamanho > $tamanhoMaximo) {
                $erros[] = "Seu arquivo excede o tamanho máximo permitido (5MB).";
            }

            // Extensões de arquivo permitidas
            $extensoesPermitidas = ["png", "jpg", "jpeg"];

            // Obter a extensão do arquivo
            $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

            // Verificar se a extensão do arquivo é permitida
            if (!in_array(strtolower($extensao), $extensoesPermitidas)) {
                $erros[] = "Extensão do arquivo não permitida. Por favor, envie um arquivo PNG, JPG ou JPEG.";
            }

            // Tipos MIME permitidos
            $tiposMimePermitidos = ["image/png", "image/jpg", "image/jpeg"];

            // Verificar se o tipo MIME do arquivo é permitido
            if (!in_array($tipo, $tiposMimePermitidos)) {
                $erros[] = "Tipo de arquivo não permitido. Por favor, envie um arquivo de imagem PNG, JPG ou JPEG.";
            }

            // Se não houver erros, mover o arquivo para o diretório de uploads
            if (empty($erros)) {
                // Nome único para o arquivo usando o nome do usuário e o nome original do arquivo
                $nomeUsuario = $_POST['nome'];
                $novoNome = $nomeUsuario . "_" . $nomeArquivo;

                // Tentar mover o arquivo para o diretório de uploads
                if (move_uploaded_file($nomeTemporario, $caminho . $novoNome)) {
                    echo "Upload realizado com sucesso!";
                } else {
                    echo "Erro ao enviar o arquivo.";
                }
            } else {
                // Exibir mensagens de erro se houver problemas com o upload do arquivo
                foreach ($erros as $erro) {
                    echo $erro . "<br>";
                }
            }
        } else {
            echo "Por favor, selecione um arquivo para enviar.";
        }
    }

    // Fechar conexão com o banco de dados
    mysqli_close($connect);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
                    <li><a href="pelucias.php">Pelúcias</a></li>
                    <li><a href="madeira.php">Brinquedos de Madeira</a></li>
                    <li><a href="quebra.php">Quebra-Cabeças</a></li>
                    <li><a href="sobre.php">Sobre Nós</a></li>
                    <li><a href="suporte.php">Suporte e Ajuda</a></li>
                    <li><a href="faq.php">Fórum de Perguntas</a></li>
                    <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                    <li><a href="politica_devolucao.php">Devolução</a></li>
                    <li><a href="redes_sociais.php">Redes Sociais</a></li>
                    <li><a href="login.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="search-bar">
        <form action="login.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Painel de Cadastro</legend>
                <input type="text" name="nome" placeholder="Digite seu Nome" required>
                <input type="email" name="email" placeholder="Digite seu E-mail" required>
                <input type="password" name="senha" placeholder="Insira sua senha" required>
                <input type="file" name="arquivo" required>
                <button type="submit" name="cadastrar">Cadastrar Usuário</button>
            </fieldset>
        </form>
    </div>
</body>
</html>