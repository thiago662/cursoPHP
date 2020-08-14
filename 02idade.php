<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>2 idade</title>
</head>
<body>
	<?php
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[não informado]";
		$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
		$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[não sexo]";
		$idade = date("Y") - $ano;
		echo "$nome é $sexo e tem $idade anos<br/>";
	?>
	<a href="02exercicio.php">Voltar</a>
</body>
</html>