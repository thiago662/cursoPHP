<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>10ºaula PHP</title>
</head>
<body>
	<?php
		$p = "Leite";
		$pr = 4.5;

		//echo "O $p custa R$ ".number_format($pr,2);
		printf("O %s custa R$ %.2f <br/>", $p, $pr);

		$x[0] = 4;
		$x[1] = 3;
		$x[2] = 8;

		print_r($x);

		$v = array(5,4,3,2,1);

		var_dump($v);

		$t = "aqui temos um texto gigante que é muito grande, simplismente colosal e sensacional";

		$r = wordwrap($t, 3, "<br/>\n", true);

		echo "<br/>$r<br/>";

		$txt = "Curso em video";

		$tamanho = strlen($txt);

		echo "$tamanho<br/>";

		$nome = "   marico martelo   ";

		echo (strlen($nome));

		$novo = trim($nome);

		echo "<br/>$novo<br/>";

		echo (strlen($novo));

		$nn = ltrim($novo);

		echo "<br/>$nn<br/>";

		$nr = rtrim($novo);

		echo "<br/>$nr<br/>";

		$frase = "eu, vou estudar php";

		$cont = str_word_count($frase,0);

		print_r($cont);

		$cont = str_word_count($frase,1);

		print_r($cont);

		$cont = str_word_count($frase,2);

		print_r($cont);

		$site = "curso em video";

		$vetor = explode(" ", $site);

		print_r($vetor);

		$haha = "Thiago";

		$vertor = str_split($haha);

		print_r($vertor);

		$vethor = array("Curso","em","video");

		$tex = implode(" ", $vethor);

		echo "<br/>$tex<br/>";

		$texx = join(" ", $vethor);

		echo "<br/>$texx<br/>";

		$letra = chr(86);

		echo "<br>86 é $letra<br>";

		$letrar = "V";

		$codd = ord($letrar);

		echo "<br>V é $codd<br>";
	?>
</body>
</html>