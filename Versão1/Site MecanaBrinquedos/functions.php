<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbName = "mecana";
$connect = mysqli_connect( $server, $user, $pass, $dbName );

function login($connect){
	if ( isset($_POST['logar']) ) {
		$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
		$email = mysqli_real_escape_string($connect, $email);
		$senha = $_POST['senha'];
		$senha = mysqli_real_escape_string($connect, $senha);
		if ( !empty($email) and !empty($senha) ) {
			$query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
			$action = mysqli_query($connect, $query);
			$result = mysqli_fetch_array($action, MYSQLI_ASSOC);
			if (!empty($result)) {
				session_start();
				$_SESSION['email'] = $result['email'];
				$_SESSION['active'] = true;
				header("location: index.php");
			}else{
				echo "Usuário ou senha incorretos!";
			}
		}
	}
} //end Login

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

