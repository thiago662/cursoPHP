<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>11ºaula PHP</title>
</head>
<body>
	<pre>
		<?php
			$n = array(4,3,2,1);

			print_r($n);

			$c = range(5,20,5);

			print_r($c);

			foreach ($c as $valor) {
				echo "<br/>$valor<br/>";
			}

			$v = array("a" => 5, "b" => 2, "c" => 1, "d" => 6);

			unset($v["b"]);

			print_r($v);

			$cad = array("nome" => "Thiago", "idade" => 17, "pesso" => 65.5);

			$cad["fuma"] = false;

			print_r($cad);

			foreach ($cad as $campo => $valor) {
				echo "<br/>O valor de $campo é $valor<br/>";
			}

			$m = array(array(2,3), array(3,4), array(9,5));

			$m[2][0] = $m[1][1];

			print_r($m);

			$to = count($cad);

			echo "<br/>$to<br/>";

			echo "<br/>".count($cad)."<br/>";

			array_push($n,  1);//criar ultima posição

			array_pop($n);//destruir ultima posição

			array_unshift($n,  1);//criar primeira posição
			
			array_shift($n);//destruir primeira posição

			sort($n);//ordem crescente

			rsort($n);//ordem decrescente

			asort($n);//ordem crescente sem alterando posições

			arsort($n);//ordem decrescente sem alterando posições

			ksort($n);//ordenar por chaves crescente

			krsort($n);//ordenar por chaves decrescente
		?>
	</pre>
</body>
</html>