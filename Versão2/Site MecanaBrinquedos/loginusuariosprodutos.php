<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Simular um login bem-sucedido
    $_SESSION['loggedin'] = true;

    // Redirecionar para a URL de redirecionamento, se existir
    if (isset($_GET['redirect_url'])) {
        $redirect_url = $_GET['redirect_url'];
        header("Location: $redirect_url");
        exit;
    }

    // Redirecionar para a página principal, se nenhuma URL de redirecionamento for fornecida
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mecana Brinquedos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <main class="search-bar">
        <h2>Login</h2>
        <form method="post" class= "logo">
            <label for="username">E-mail:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
        </form>
    </main>
</body>
</html>
