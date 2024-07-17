<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "mecana";
$connect = mysqli_connect($server, $user, $pass, $dbName);

function login($connect){
    if ( isset($_POST['logar']) ) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = mysqli_real_escape_string($connect, $email);
        $senha = $_POST['senha'];
        $senha = mysqli_real_escape_string($connect, $senha);
        
        if ( !empty($email) && !empty($senha) ) {
            $query = "SELECT * FROM clientes WHERE email = '$email'";
            $action = mysqli_query($connect, $query);
            
            if ($action) {
                $result = mysqli_fetch_array($action, MYSQLI_ASSOC);
                
                if ($result && password_verify($senha, $result['senha'])) {
                    session_start();
                    $_SESSION['idcliente'] = $result['idcliente'];
                    $_SESSION['nome'] = $result['nome'];
                    $_SESSION['email'] = $result['email'];
                    $_SESSION['role'] = $result['role'];
                    $_SESSION['active'] = true;
                    header("location: index.php");
                    exit();
                } else {
                    echo "Usuário ou senha incorretos!";
                }
            } else {
                echo "Erro na consulta: " . mysqli_error($connect);
            }
        } else {
            echo "Por favor, preencha todos os campos!";
        }
    }
}

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header("location: login.php");
}

// Função para realizar o upload de imagem
function uploadImage($caminho_destino) {
    $nome_arquivo = $_FILES['arquivo']['name'];
    $caminho_temporario = $_FILES['arquivo']['tmp_name'];
    
    $caminho_completo = $caminho_destino . $nome_arquivo;

    if (move_uploaded_file($caminho_temporario, $caminho_completo)) {
        return $caminho_completo;
    } else {
        return null; // ou tratar o erro de upload aqui
    }
}
?>
