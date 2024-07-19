<?php require_once "adimfunctions.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Adiministrativo</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <button id="back-to-top" title="Voltar ao topo">↑</button>
        <div class="container">
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
<body>
	<?php login($connect); ?>
	<form method="post">
    <section class="banner">
    </section>
        <input type="text" name="nome" placeholder="Seu nome" required>
		<input type="email" name="email" placeholder="Seu e-mail" required>
		<input type="password" name="senha" placeholder="Sua senha" required>
		<input type="submit" name="logar" value="Acessar">
	</form>
</body>
</html>
