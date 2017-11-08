<?php
	include_once("conexao.php");

	$filtro = isset($_GET['filtro'])?$_GET['filtro']:"";

	if( !empty($filtro) ){
		$sql = "select * from contatos where nome like '%$filtro%'";

		$consulta = mysqli_query($conexao,$sql);
		$registros = mysqli_num_rows($consulta);
	}else{
		$sql = "select * from contatos order by Nome";

		$consulta = mysqli_query($conexao,$sql);
		$registros = mysqli_num_rows($consulta);
	}

?>

</!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de contatos</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="script/validacaoEmail.js"></script>
</head>
<body>
	<div class="Formulario">
		<h1>Formulário de cadastro de contatos</h1>
		<form name="form" method="post" action="processa.php">
			<fieldset id="DadosPessoais">
				<legend class="texto">Digite os dados do seu contato</legend>
				<label class="texto" for="nome">Nome:</label>
				<input class="campo" type="text" name="Nome"  placeholder="Digite o nome do seu contato" maxlength="40" required autofocus />

				<label class="texto" for="telefone">Telefone:</label>
				<input class="campo" pattern="^\d{2}\d{5}\d{4}$" type="tel" name="Telefone" placeholder="88993511487"  required />

				<label class="texto" class="texto" for="email">Email:</label>
				<input id="email" class="campo" type="email" name="Email" placeholder="example@exm.com" required  maxlength="60"/>

				<label class="texto" for="nascimento">Data de nascimento:</label>
				<input type="date" name="Nascimento" class="campo" required />
			</fieldset>

			<div id="Botoes">
				<input id="test" type="submit" onclick="validacaoEmail(form.email)" value="Cadastrar contato" class="btn">
				<input type="reset" value="Limpar campos" class="btn">
			</div>

		</form>
	</div>
	<div>
		<form name="filtro" method="get" action="">
			<p>Filtrar por Nome:</p>
			<div id="camposFiltro">
				<input id="campoPesquisa" type="submit" value="Filtrar" class="btn">
				<input id="labelPesquisa" type="text" name="filtro">
			</div>
		</form>
	</div>
	<div>
		<table id="tabela">
			<title>Contatos</title>
			<div id="Colunas">
				<tr>
					<th>Nome</th>
					<th>Email</th>
					<th>Telefone</th>
					<th>Data de nascimento</th>
					<th>Data de registro</th>
				</tr>
			</div>
		<?php
				while($exibirRegistros = mysqli_fetch_array($consulta)){
					$nome = $exibirRegistros[1];
					$email = $exibirRegistros[2];
					$telefone = $exibirRegistros[3];
					$nascimento = $exibirRegistros[4];
					$dataRegistro = $exibirRegistros[5];

					print "<tr>";
					print "<td>$nome";
					print "<td>$email";
					print "<td>$telefone";
					print "<td>$nascimento";
					print "<td>$dataRegistro<br>";
					print "</tr>";

				}

				mysqli_close($conexao);
			?>
		</table>
	</div>
	
</body>
</html>