<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>6 calcular</title>
</head>
<body>
	<?php
		$n = isset($_GET["nu"]) ? $_GET["nu"] : 0;
		$o = isset($_GET["op"]) ? $_GET["op"] : 1;

		switch ($o) {
			case 1:
				$r = $n * 2;
				break;

			case 2:
				$r = $n ^ 2;
				break;

			case 3:
				$r = sqrt($n);//$n ^ (1/2);
				break;
		}

		echo "numero: $n<br/>resultado: $r<br/>";
	?>
	<a href="aula_7.php">Voltar</a>
</body>
</html>