<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Compra</title>
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

    <main>
        <section class="confirmacao-compra">
            <h2>Confirmação de Compra</h2>
            <?php
            // Exemplo simples de receber o nome do produto comprado da página anterior
            if (isset($_POST['produto'])) {
                $produto = htmlspecialchars($_POST['produto']);
                echo "<p>Você comprou o brinquedo: <strong>$produto</strong></p>";
            }
            ?>

            <p>Agora você pode avaliar este produto:</p>
            <form action="avaliar.php" method="POST">
                <textarea name="comentario" placeholder="Digite sua avaliação"></textarea>
                <select name="nota">
                    <option value="1">★</option>
                    <option value="2">★★</option>
                    <option value="3">★★★</option>
                    <option value="4">★★★★</option>
                    <option value="5">★★★★★</option>
                </select>
                <input type="hidden" name="produto_id" value="<?php echo $produto_id; ?>">
                <button type="submit">Enviar Avaliação</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Mecana Brinquedos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
