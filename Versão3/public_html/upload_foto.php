<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload de foto</title>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="text" name="nome" placeholder="Seu Nome">			
		
		<!-- File para arquivo único -->
		<input type="file" name="arquivo"> 
		
		<input type="submit" name="enviar">
	</form>

	<?php 
	if (isset($_POST['enviar'])) {
		//print_r($_FILES['arquivo']);
		if (!empty($_FILES['arquivo']['name'])) {
		 	
			 $nomeArquivo = $_FILES['arquivo']['name'];
			 $tipo = $_FILES['arquivo']['type'];
			 $nomeTemporario = $_FILES['arquivo']['tmp_name'];
			 $tamanho = $_FILES['arquivo']['size'];
			 $erros = array();

			 $tamanhoMaximo = 1024 * 1024 * 5; //5MB
			 if ($tamanho > $tamanhoMaximo) {
			 	$erros[] = "Seu arquivo excede o tamanho máximo<br>";
			 }

			 $arquivosPermitidos = ["png", "jpg", "jpeg"];
			 $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);
			 if ( !in_array($extensao, $arquivosPermitidos) ) {
			 	$erros[] = "Arquivo não permitido.<br>";
			 }

			$typesPermitidos = ["image/png", "image/jpg", "image/jpeg"];
			if ( !in_array($tipo, $typesPermitidos) ) {
			 	$erros[] = "Tipo de arquivo não permitido.<br>";
			}

			if (!empty($erros)) {
				foreach ($erros as $erro) {
					echo $erro;
				}
			}else{
				$caminho = "uploads/";
				$hoje = date("d-m-Y_h-i");
				$user = $_POST['nome'];
				//$novoNome = $hoje."-".$nomeArquivo;
				$novoNome = $user."-".$nomeArquivo;
				if(move_uploaded_file($nomeTemporario, $caminho.$novoNome)) {
					echo "Upload feito com Sucesso!";
				}else{
					echo "Erro ao enviar o arquivo!";
				}


			}
		 }
	}




	?>

</body>
</html>