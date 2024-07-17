<?php
// Conexão com o banco de dados (substitua com suas configurações)
$servername = "localhost";
$username = "Adiministrador"; // Certifique-se de que o nome de usuário esteja correto
$password = "sua_senha"; // Substitua pela senha correta
$dbname = "mecana";

// Criar conexão
$connect = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($connect->connect_error) {
    die("Conexão falhou: " . $connect->connect_error);
}


// Consulta para obter histórico (limitado a 10 registros por exemplo)
$sql = "SELECT * FROM `audit_log` ORDER BY `timestamp` DESC LIMIT 10";
$result = $connect->query($sql);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo</title>
    <link rel="icon" href="imagens/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Painel Administrativo</h1>
            <h2>Bem-Vindos Laisi e Gabriel!</h2>
            <nav>
                <ul>
                    <li><a href="listar_usuarios.php">Listar Usuários</a></li>
                    <li><a href="inserir_usuario.php">Inserir Novo Usuário</a></li>
                    <li><a href="editar_usuario.php">Editar Usuário</a></li>
                    <li><a href="excluir_usuario.php">Excluir Usuário</a></li>
                    <li><a href="avaliacoes_produto.php">Avaliações</a></li>
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
    <div class="container">
        <section class="banner">
            <h1 class="banner-content">APENAS GABRIEL E LAISI TEM ACESSO!</h1>
        </section>
        <section class="historico">
            <h2>Histórico de Ações</h2>
            <ul>
                <?php
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<li>{$row['timestamp']} - {$row['action']} - {$row['details']}</li>";
                    }
                } else {
                    echo "<li>Nenhum registro encontrado.</li>";
                }
                ?>
            </ul>
        </section>
    </div>
</body>
</html>

<?php
// Fechar conexão
$connect->close();
?>
  
</body>
</html>
