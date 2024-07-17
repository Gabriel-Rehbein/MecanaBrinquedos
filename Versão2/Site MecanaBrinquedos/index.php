<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecana Brinquedos</title>
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
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button id="search-btn">Pesquisar</button>
            <select>
                <option value="todos">Todas as idades</option>
                <option value="0-4">Abaixo de 4 anos</option>
                <option value="4-8">Entre 4 e 8 anos</option>
                <option value="8-12">Entre 8 e 12 anos</option>
                <option value="12+">12+</option>
            </select>
            <div class="suggestions" id="suggestions">
                <ul>
                    <li><a href="#">Mouse</a></li>
                    <li><a href="#">Rex</a></li>
                    <li><a href="#">Unicórnio</a></li>
                    <li><a href="#">Komodo</a></li>
                    <li><a href="#">Sasquatch</a></li>
                </ul>
            </div>
        </div>
        <script src="script.js"></script>
        <div class="carrinho-container">
            <div class="carrinho">
                <h2>Seu Carrinho</h2>
                <div class="item-carrinho">
                    <img src="imagens/produtos/lobby/azul.png" alt="Item">
                    <p>Item no Carrinho</p>
                </div>
                <div class="item-carrinho">
                    <img src="imagens/produtos/lobby/rosa.png" alt="Item">
                    <p>Outro Item</p>
                </div>
            </div>
            <div class="carrinho-toggle">
                <div class="toggle-icon">&#9654;</div>
            </div>
        </div>
    </header>
    <main>
        <section class="banner">
        </section>
    </header>
    <main>
        <section class="produtos">
            <?php
            // Dados dos produtos
            $produtos = [
                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],

                [
                    'imagem' => 'imagens/produtos/lobby/amarela.png',
                    'nome' => 'Mouse',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/azul.png',
                    'nome' => 'Sasquatch',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 1
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/verde.png',
                    'nome' => 'Rex',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 3
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/rosa.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 2
                ],
                [
                    'imagem' => 'imagens/produtos/lobby/vermelho.png',
                    'nome' => 'Komodo',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 5
                ],
            ];

            foreach ($produtos as $produto) {
                $url = 'produto.php?imagem=' . urlencode($produto['imagem']) . 
                       '&nome=' . urlencode($produto['nome']) . 
                       '&descricao=' . urlencode($produto['descricao']) . 
                       '&preco=' . urlencode($produto['preco']) . 
                       '&avaliacao=' . urlencode($produto['avaliacao']);
                echo '<div class="produto">
                        <img src="' . htmlspecialchars($produto['imagem']) . '" alt="Brinquedo">
                        <h3>' . htmlspecialchars($produto['nome']) . '</h3>
                        <p>' . htmlspecialchars($produto['descricao']) . '</p>
                        <p class="rate">' . str_repeat('&#9733;', $produto['avaliacao']) . str_repeat('&#9734;', 5 - $produto['avaliacao']) . '</p>
                        <button class="search-bar" onclick="location.href=\'loginusuariosprodutos.php?redirect_url=' . urlencode($url) . '\'">Comprar</button>
                      </div>';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Mecana Brinquedos. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
