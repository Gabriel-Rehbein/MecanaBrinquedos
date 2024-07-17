<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Painel Admin</title>
</head>
<body>
<?php if (isset($_SESSION['active'])) { ?>
	<h1>Bem vindo ao painel Administrativo.</h1>
	<h2>
		Você está logado com o usuário, 
		<?php echo $_SESSION['email']; ?>		
	</h2>
	<div>
		<a href="logout.php">Deslogar do sistema</a>
	</div>

<?php } else {
	header("location: login.php");
} ?>
</body>
</html>