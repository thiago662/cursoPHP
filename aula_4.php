<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>4ºaula PHP</title>
</head>
<body>
	<?php
		$n1 = 2019;
		echo "esse ano é $n1";
		echo "proximo sera ".$n1++;
		echo "esse ano é $n1<br>";
		$a = 2;
		$b = &$a;
		echo $a." ".$b."<br>";
		$b += 5;
		echo $a." ".$b;
		$x = "abc";
		$$x = "def";
		echo "<br>x = $x<br>";
		echo "abc = $abc";
	?>
</body>
</html>