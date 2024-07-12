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
        <!--
        <div class="carrinho">
            <h2>Carrinho de Compras</h2>
            <div id="carrinho-lista"></div>
        </div>
        
        <!-- Script para exibir produtos no carrinho
        <script>
    // Função para carregar o carrinho ao carregar a página
    window.onload = function() {
        exibirCarrinho();
    };

    function exibirCarrinho() {
        var carrinho = localStorage.getItem('carrinho') ? JSON.parse(localStorage.getItem('carrinho')) : [];

        var carrinhoLista = document.getElementById('carrinho-lista');
        carrinhoLista.innerHTML = '';

        carrinho.forEach(function(produto) {
            var produtoHTML = `
                <div class="item-carrinho">
                    <img src="${produto.imagem}" alt="${produto.nome}">
                    <p>${produto.nome}</p>
                </div>
            `;
            carrinhoLista.innerHTML += produtoHTML;
        });
    }
</script>
-->
        
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
         
            <div class="produto">
                <img src="imagens/produtos/madeiras/aviao.png" alt="Brinquedo de Madeira">
                <h3>Aviãozinho</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/unicornio.png" alt="Brinquedo de Madeira">
                <h3>Unicórnio</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/caminhao.png" alt="Brinquedo de Madeira">
                <h3>Caminhão</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/alfabeto.png" alt="Brinquedo de Madeira">
                <h3>Alfabeto</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/blocos.png" alt="Brinquedo de Madeira">
                <h3>Jogo de Blocos</h3>
                <p>Jogo de Blocos</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/peao.png" alt="Brinquedo de Madeira">
                <h3>Peão</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/boliche.png" alt="Brinquedo de Madeira">
                <h3>Boliche</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/coelho.png" alt="Brinquedo de Madeira">
                <h3>Coelhinho</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/_jogo_velha.png" alt="Brinquedo de Madeira">
                <h3>Jogo da Velha</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/madeiras/cao.png" alt="Brinquedo de Madeira">
                <h3>Cãozinho</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/sem_estoque.png" alt="Brinquedo de Madeira">
                <h3>Unicórnio de Madeira</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9734;&#9734;&#9734;&#9734;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/sem_estoque.png" alt="Brinquedo de Madeira">
                <h3>Unicórnio de Madeira</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9734;&#9734;&#9734;&#9734;&#9734;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_madeira.php'">Comprar</button>
            </div>

        </section>
    </main>
    <footer>
        <p>&copy; Abre no dia 05/05/2025 - Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>
</body>
</html>



