<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>3ºaula PHP</title>
</head>
<body>
	<?php
		$n1 = 3;
		$n2 = 2;
		$s = $n1 + $n2;//adição
		echo "<h1> A soma vale $s</h1>";
		$s = $n1 - $n2;//subtração
		echo "<h1> A soma vale $s</h1>";
		$s = $n1 * $n2;//multiplicação
		echo "<h1> A soma vale $s</h1>";
		$s = $n1 / $n2;//divisão
		echo "<h1> A soma vale $s</h1>";
		$s = $n1 % $n2;//modulo
		echo "<h1> A soma vale $s</h1>";
		echo "<h1>A media vale ".(($n1 + $n2)/2)."</h1>";
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$s = $n1 + $n2;
		echo "<h1>A soma $s</h1>";
		echo "<h1>valor absoluto ".abs($n1)."</h1>";
		echo "<h1>valor potencia de $n1<sup>$n2</sup> é ".pow($n1,$n2)."</h1>";
	?>
</body>
</html>