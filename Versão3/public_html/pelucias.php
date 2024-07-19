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
        
      Script para exibir produtos no carrinho
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
         
            <div class="produto">
                <img src="imagens/produtos/pelucias/dinossauro.png" alt="Pelucia">
                <h3>Dinossauro</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/pelucias/urso.png" alt="Pelucia">
                <h3>Urso</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/pelucias/giraffa.png" alt="Pelucia">
                <h3>Giraffa</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/pelucias/pinguim.png" alt="Pelucia">
                <h3>Pinguim</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/pelucias/pato.png" alt="Pelucia">
                <h3>Pato</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>
            
            <div class="produto">
                <img src="imagens/produtos/pelucias/6_ursinhos_carinhosos.png" alt="Pelucia">
                <h3>Combo Ursinhos Carinhosos</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button id="login-btn" onclick="location.href='descricao_produto_pelucia.php'">Comprar</button>
            </div>



 


        </section>
    </main>
    <footer>
        <p>&copy; Abertura Oficial 05/05/2025 - Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>
</body>
</html>



