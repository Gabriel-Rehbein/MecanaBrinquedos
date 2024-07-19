<?php
$server = "127.0.0.1";
$user = "u285025226_gabriel";
$pass = "Senha20022992";
$dbName = "u285025226_mecana";
$connect = mysqli_connect($server, $user, $pass, $dbName);

// Verifica se a conexão foi estabelecida com sucesso
if (!$connect) {
    die("Falha na conexão: " . mysqli_connect_error());
}

function login($connect){
    if ( isset($_POST['logar']) ) {
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $email = mysqli_real_escape_string($connect, $email);
        $senha = $_POST['senha'];
        $senha = mysqli_real_escape_string($connect, $senha);
        
        if ( !empty($email) && !empty($senha) ) {
            $query = "SELECT * FROM clientes WHERE email = ?";
            
            // Prepara a consulta
            $stmt = mysqli_prepare($connect, $query);
            mysqli_stmt_bind_param($stmt, "s", $email);
            
            // Executa a consulta
            if (mysqli_stmt_execute($stmt)) {
                $result = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($result);
                
                if ($row && password_verify($senha, $row['senha'])) {
                    session_start();
                    $_SESSION['idcliente'] = $row['idcliente'];
                    $_SESSION['nome'] = $row['nome'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['role'] = $row['role'];
                    $_SESSION['active'] = true;
                    header("location: index.php");
                    exit();
                } else {
                    echo "Usuário ou senha incorretos!";
                }
            } else {
                echo "Erro na consulta: " . mysqli_error($connect);
            }
            
            mysqli_stmt_close($stmt);
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
