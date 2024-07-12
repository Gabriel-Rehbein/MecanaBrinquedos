<?php
// Conectar ao banco de dados
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "mecana";
$connect = mysqli_connect($server, $user, $pass, $dbName);

// Verificar conexão
if (!$connect) {
    die("Conexão falhou: " . mysqli_connect_error());
}

// Verificar se o ID do usuário a ser excluído foi enviado via GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Preparar a consulta para excluir o usuário
    $stmt = $connect->prepare("DELETE FROM clientes WHERE idcliente = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Definir a mensagem de sucesso
        session_start();
        $_SESSION['message'] = "Usuário excluído com sucesso!";
    } else {
        // Definir a mensagem de erro
        session_start();
        $_SESSION['message'] = "Erro ao excluir usuário: " . $stmt->error;
    }

    $stmt->close();
}

// Redirecionar para a página de listar usuários após excluir
header("Location: listar_usuarios.php");
exit();
?>
