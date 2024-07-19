<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mecana Brinquedos</title>
    <link rel="icon" href="Imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <h1>Mecana Brinquedos</h1>
                <img src="Imagens/logo.png" alt="Logo" class="logo-img">
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
        <div class="search-bar">
            <input type="text" placeholder="Pesquisar...">
            <button id="search-bar">Pesquisar</button>
            <select>
                <option value="todos">Todas as idades</option>
                <option value="0-4">Abaixo de 4 anos</option>
                <option value="4-8">Entre 4 e 8 anos</option>
                <option value="8-12">Entre 8 e 12 anos</option>
                <option value="12+">12+</option>
            </select>
        </div>
    </header>
    <main>
        <section class="produtos">
            <?php
            // Dados dos produtos
            $produtos = [
                [
                    'imagem' => 'imagens/produtos/madeiras/aviao.png',
                    'nome' => 'Aviãozinho',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '100.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/unicornio.png',
                    'nome' => 'Unicórnio',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/caminhao.png',
                    'nome' => 'Caminhão',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '120.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/alfabeto.png',
                    'nome' => 'Alfabeto',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '130.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/blocos.png',
                    'nome' => 'Jogo de Blocos',
                    'descricao' => 'Jogo de Blocos',
                    'preco' => '110.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/peao.png',
                    'nome' => 'Peão',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '90.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/boliche.png',
                    'nome' => 'Boliche',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '200.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/coelho.png',
                    'nome' => 'Coelhinho',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '140.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/_jogo_velha.png',
                    'nome' => 'Jogo da Velha',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '160.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/madeiras/cao.png',
                    'nome' => 'Cãozinho',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '170.00',
                    'avaliacao' => 4
                ],
                [
                    'imagem' => 'imagens/produtos/sem_estoque.png',
                    'nome' => 'Unicórnio de Madeira',
                    'descricao' => 'Descrição do Brinquedo.',
                    'preco' => '150.00',
                    'avaliacao' => 0
                ]
            ];

            foreach ($produtos as $produto) {
                $url = 'descricao_produto_madeira.php?imagem=' . urlencode($produto['imagem']) . 
                       '&nome=' . urlencode($produto['nome']) . 
                       '&descricao=' . urlencode($produto['descricao']) . 
                       '&preco=' . urlencode($produto['preco']) . 
                       '&avaliacao=' . urlencode($produto['avaliacao']);
                echo '<div class="produto">
                        <img src="' . htmlspecialchars($produto['imagem']) . '" alt="' . htmlspecialchars($produto['nome']) . '">
                        <h3>' . htmlspecialchars($produto['nome']) . '</h3>
                        <p>' . htmlspecialchars($produto['descricao']) . '</p>
                        <p class="rate">' . str_repeat('&#9733;', $produto['avaliacao']) . str_repeat('&#9734;', 5 - $produto['avaliacao']) . '</p>
                        <button id="login-btn" onclick="location.href=\'loginusuariosprodutos.php?redirect_url=' . urlencode($url) . '\'">Comprar</button>
                      </div>';
            }
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; Abertura Oficial 05/05/2025 - Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>
</body>
</html>
