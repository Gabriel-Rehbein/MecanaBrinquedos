<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliações - Mecana Brinquedos</title>
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
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Página Inicial</a></li>
                <li><a href="pelucias.php">Pelúcias</a></li>
                <li><a href="Madeira.php">Brinquedos de Madeira</a></li>
                <li><a href="quebra.php">Quebra-Cabeças</a></li>
                <li><a href="sobre.php">Sobre Nós</a></li>
                <li><a href="suporte.php">Suporte e Ajuda</a></li>
                <li><a href="faq.php">Fórum de Perguntas</a></li>
                <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                <li><a href="politica_devolucao.php">Devolução</a></li>
                <li><a href="redes_sociais.php">Redes Sociais</a></li>
                <li><a href="loginusuario.php">Login</a></li>
                <li><a href="login.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="avaliacoes">
            <?php

            require_once "functions.php";
            // Verifica se o parâmetro 'nome' está definido na URL
            $nome_produto = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : 'Produto';
            ?>
            <h2>Avaliações de <?php echo $nome_produto; ?></h2>
            <?php
            // Conexão com o banco de dados (substitua pelos seus dados de conexão)
            $servername = "localhost";
            $username = "seu_usuario"; // Coloque seu usuário do banco de dados aqui
            $password = "sua_senha"; // Coloque sua senha do banco de dados aqui
            $dbname = "u285025226_mecana";

            // Criar conexão
            $connectect = mysqli_connect( $server, $user, $pass, $dbName );

            // Verificar conexão
            if ($connect->connect_error) {
                die("Connection failed: " . $connect->connect_error);
            }

            // Consulta SQL para obter as avaliações do produto
            $produto_id = isset($_GET['produto_id']) ? $_GET['produto_id'] : 0; // Defina um valor padrão ou trate conforme necessário
            $sql = "SELECT * FROM avaliacoes WHERE id_produto = $produto_id ORDER BY data_avaliacao DESC";
            $result = $connect->query($sql);

            // Exibir as avaliações
            if ($result && $result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='avaliacao'>";
                    echo "<p><strong>Usuário:</strong> " . htmlspecialchars($row['id_usuario']) . "</p>";
                    echo "<p><strong>Avaliação:</strong> " . htmlspecialchars($row['avaliacao']) . " estrela(s)</p>";
                    echo "<p><strong>Data:</strong> " . htmlspecialchars($row['data_avaliacao']) . "</p>";
                    echo "<p><strong>Comentário:</strong><br>" . nl2br(htmlspecialchars($row['comentario'])) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>Ainda não há avaliações para este produto.</p>";
            }

            // Fechar conexão
            $connect->close();
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; Abertura Oficial 05/05/2025 - Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>
</body>
</html>
