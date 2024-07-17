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
			$query = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha' ";
			$action = mysqli_query($connect, $query);
			$result = mysqli_fetch_array($action, MYSQLI_ASSOC);
			if (!empty($result)) {
				session_start();
				$_SESSION['email'] = $result['email'];
				$_SESSION['active'] = true;
				header("location: adim.php");
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
	header("location: adimlogin.php");
}
