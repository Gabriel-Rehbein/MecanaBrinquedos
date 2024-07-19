<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastreamento de Pedidos</title>
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
    </header>
    <main>
        <section class="rastrear-pedido">
            <h2>Rastreamento de Pedidos</h2>
            <p>Para rastrear o status do seu pedido, insira o número do pedido no campo abaixo e clique em "Rastrear".</p>
            <form method="POST">
                <label for="order-number">Número do Pedido:</label>
                <input type="text" id="order-number" name="order-number" required>
                <button type="submit">Rastrear</button>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $orderNumber = $_POST["order-number"];
                
                // URL da API dos Correios (substitua pela URL real da API)
                $apiUrl = "https://api.linkdoscorreios.com.br/rastreio/{$orderNumber}";

                // Fazendo a solicitação HTTP para a API dos Correios
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);

                // Decodificando a resposta JSON da API
                $trackingInfo = json_decode($response, true);

                if ($trackingInfo && isset($trackingInfo['status'])) {
                    echo "<h2>Status do Pedido: " . $trackingInfo['status'] . "</h2>";
                    echo "<p>Data: " . $trackingInfo['data'] . "</p>";
                    echo "<p>Local: " . $trackingInfo['local'] . "</p>";
                    echo "<p>Detalhes: " . $trackingInfo['detalhes'] . "</p>";
                } else {
                    echo "<p>Não foi possível rastrear o pedido. Verifique o número do pedido e tente novamente.</p>";
                }
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>
</body>
</html>
