<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>5ºaula PHP</title>
</head>
<body>
	<?php
		$a = 1;
		$b = 2;
		$c = "1";
		$maior = $a>$b ? $a : $b;
		echo $maior."<br>";
		$r = ($a == $c) ? "sim" : "não";
		echo $r."<br>";
		echo "resposta ".(($a === $c) ? "sim" : "não")."<br>";
	?>
</body>
</html>