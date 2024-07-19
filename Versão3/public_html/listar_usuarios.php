<?php
// Conectar ao banco de dados
$server = "127.0.0.1";
$user = "u285025226_gabriel";
$pass = "Senha20022992";
$dbName = "u285025226_mecana";
$connect = mysqli_connect($server, $user, $pass, $dbName);

// Verificar conexão
if (!$connect) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Query para selecionar todos os usuários
$query = "SELECT * FROM clientes";
$result = mysqli_query($connect, $query);
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <div class="container">
            <h1>Lista de Usuários</h1>
            <h2>Bem-Vindos Laisi e Gabriel!</h2>
            <nav>
                <ul>
                    <li><a href="listar_usuarios.php">Listar Usuários</a></li>
                    <li><a href="inserir_usuario.php">Inserir Novo Usuário</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
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
        <table>
            <thead>
                <tr>
                    <th>Perfil</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Situação</th>
                    <th>Data de Nascimento</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr class="produto">
                        <td class="logo-img"><img src="<?php echo $row['imagem']; ?>" alt="Imagem"></td>
                        <td><?php echo $row['idcliente']; ?></td>
                        <td><?php echo $row['nome']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo ($row['situacao'] == 1) ? 'Ativo' : 'Inativo'; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($row['nascimento'])); ?></td>
                        <td class="search-btn">
                            <a href="editar_usuario.php?id=<?php echo $row['idcliente']; ?>">Editar</a>
                            <a href="excluir_usuario.php?id=<?php echo $row['idcliente']; ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
// Fechar conexão
mysqli_close($connect);
?>
