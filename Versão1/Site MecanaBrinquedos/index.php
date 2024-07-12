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
                    <li><a href="faq.php">Forum de Peguntas</a></li>
                    <li><a href="rastrear_pedido.php">Rastrear Pedido</a></li>
                    <li><a href="politica_devolucao.php">Devolução</a></li>
                    <li><a href="redes_sociais.php">Redes Sociais</a></li>
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

        <section class="produtos">
            <div class="produto">
                <img src="imagens/produtos/lobby/amarela.png" alt="Brinquedo">
                <h3>Mouse</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/azul.png" alt="Brinquedo">
                <h3>Sasquatch</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9734;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/verde.png" alt="Brinquedo">
                <h3>Rex</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/rosa.png" alt="Brinquedo">
                <h3>Unicórnio</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/vermelho.png" alt="Brinquedo">
                <h3>Komodo</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>


            <div class="produto">
                <img src="imagens/produtos/lobby/amarela.png" alt="Brinquedo">
                <h3>Mouse</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/azul.png" alt="Brinquedo">
                <h3>Sasquatch</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9734;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/verde.png" alt="Brinquedo">
                <h3>Rex</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/rosa.png" alt="Brinquedo">
                <h3>Unicórnio</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/vermelho.png" alt="Brinquedo">
                <h3>Komodo</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>


            <div class="produto">
                <img src="imagens/produtos/lobby/amarela.png" alt="Brinquedo">
                <h3>Mouse</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/azul.png" alt="Brinquedo">
                <h3>Sasquatch</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9734;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/verde.png" alt="Brinquedo">
                <h3>Rex</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/rosa.png" alt="Brinquedo">
                <h3>Unicórnio</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/vermelho.png" alt="Brinquedo">
                <h3>Komodo</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9733;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/amarela.png" alt="Brinquedo">
                <h3>Mouse</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9733;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/azul.png" alt="Brinquedo">
                <h3>Sasquatch</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9734;&#9734;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>

            <div class="produto">
                <img src="imagens/produtos/lobby/verde.png" alt="Brinquedo">
                <h3>Rex</h3>
                <p>Descrição do Brinquedo.</p>
                <p class="rate">&#9733;&#9733;&#9733;&#9734;&#9734;</p>
                <button class="search-bar" onclick="location.href='descricao_produto.php'">Comprar</button>
            </div>
        </section>
    </main>
    <footer>
        <p>&copy; Abre no dia 05/05/2025 - Mecana Brinquedos - Aqui você aprende brincando</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const carrinhoToggle = document.querySelector('.carrinho-toggle');
            const carrinhoContainer = document.querySelector('.carrinho-container');
            
            carrinhoToggle.addEventListener('click', function() {
                carrinhoContainer.classList.toggle('carrinho-aberto');
            });

            window.addEventListener('scroll', function() {
                var backToTopButton = document.getElementById('back-to-top');
                if (window.scrollY > 300) {
                    backToTopButton.classList.add('show');
                } else {
                    backToTopButton.classList.remove('show');
                }
            });

            document.getElementById('back-to-top').addEventListener('click', function() {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });

            // Mostra e esconde sugestões de pesquisa
            const searchBar = document.querySelector('.search-bar');
            const searchInput = searchBar.querySelector('input');
            const suggestions = document.getElementById('suggestions');

            searchInput.addEventListener('focus', function() {
                suggestions.classList.add('show');
            });

            searchInput.addEventListener('blur', function() {
                suggestions.classList.remove('show');
            });
        });
    </script>
</body>
</html>
