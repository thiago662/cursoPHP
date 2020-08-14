<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>Valor</title>
</head>
<body>
	<?PHP
		$valor = $_GET["v"];
		$rq = sqrt($valor);
		echo "A raiz de $valor é ".number_format($rq,2);
	?>
	<a href="aula_6.php">Voltar</a>
</body>
</html>