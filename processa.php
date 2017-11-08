<?php

include_once("conexao.php");

$nome = $_POST['Nome'];
$telefone = $_POST['Telefone'];
$email = $_POST['Email'];
$nascimento = $_POST['Nascimento'];


$sql = "insert into contatos(nome,email,telefone,nascimento,datacadastro) values ('$nome','$email','$telefone','$nascimento',current_timestamp)";

$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Resultado do cadastro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="voltar">
		<a href="index.php">Voltar</a>
	</div>
	<?php
		if($linhas == 1){
			print "<p>Cadastro realizado com sucesso</p>";
		}else{
			print "<p>Ocorreu erro ao cadastrar, este email ja existe</p>";
		}

	?>
</body>
</html>