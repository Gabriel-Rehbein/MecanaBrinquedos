<?php
// Capturar os parâmetros da URL
$imagem = htmlspecialchars($_GET['imagem'] ?? '');
$nome = htmlspecialchars($_GET['nome'] ?? 'Produto');
$descricao = htmlspecialchars($_GET['descricao'] ?? 'Descrição não disponível.');
$preco = htmlspecialchars($_GET['preco'] ?? '');
$avaliacao = htmlspecialchars($_GET['avaliacao'] ?? '0');
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nome; ?> - Mecana Brinquedos</title>
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
                <li><a href="loginusuarios.php">Login</a></li>
                <li><a href="login.php">Cadastro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="logo">
            <div>
            <div class="redes-sociais" style="color: #000;">
                <img src="<?php echo $imagem; ?>" alt="<?php echo $nome; ?>">
                
                    <h2 style="color: #000;"><?php echo $nome; ?></h2>
                    <p style="color: #000;">Preço: R$ <?php echo $preco; ?></p>
                    <p style="color: #000;">Avaliação:
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $avaliacao) {
                                echo '<span class="star">&#9733;</span>'; // Estrela preenchida
                            } else {
                                echo '<span class="star">&#9734;</span>'; // Estrela vazia
                            }
                        }
                        ?>
                    </p>
                    <p style="color: #000;">Descrição:<br><?php echo nl2br($descricao); ?></p>
                    <button class="search-bar" onclick="location.href='manutencao.php?redirect_url=<?php echo urlencode($url); ?>'">Comprar</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Mecana Brinquedos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
