<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>exercicio 4</title>
</head>
<body>
	<?php
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
		$n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
		$n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
		$media = ($n1 + $n2) / 2;
		$apro;

		if ( $media <= 10 && $media > 7 ) {
			$apro = "aprovado";
		}elseif ( $media <= 7 && $media >= 5 ) {
			$apro = "recuperação";
		}else{
			$apro = "reprovado";
		}

		echo "nome: $nome<br/>nota1: $n1<br/>nota2: $n2<br/>media: $media<br/>situação: $apro";
	?>
</body>
</html>