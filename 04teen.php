<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>exercicio 4</title>
</head>
<body>
	<?php
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
		$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
		$idade = date("Y") - $ano;
		$maior;
		$tipoVoto;

		if($idade > 18){
			$maior = "é maior de idade";
		}else{
			$maior = "não é maior de idade";
		}

		if ($idade < 16) {
			$tipoVoto = "não vota";
		}elseif (($idade >= 16 && $idade < 18) || ($idade > 65)) {
			$tipoVoto = "voto opcional";
		}else{
			$tipoVoto = "voto obrigatorio";
		}

		echo "$nome tem $idade, $maior e $tipoVoto";
	?>
</body>
</html>