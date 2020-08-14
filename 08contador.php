<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>7 personalizado</title>
</head>
<body>
	<?php
		$n1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
		$n2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;
		$n3 = isset($_GET["n3"]) ? $_GET["n3"] : 0;

		if ($n1 < $n2) {
			do {
				echo "$n1<br/>";
				$n1 += $n3;
			} while ( $n1 <= $n2 );
		} elseif ($n1 > $n2) {
			do {
				echo "$n1<br/>";
				$n1 -= $n3;
			} while ( $n1 >= $n2 );
		}else{
			echo "não é possivel<br/>";
		}

	?>
	<a href="aula_9.php">Voltar</a>
</body>
</html>