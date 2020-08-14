<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>2 exercicio</title>
</head>
<body>
	<form method="get" action="06calcular.php">
		Numero: <input type="number" name="nu"><br/>
		<fieldset><legend>Opção</legend>
			<input type="radio" name="op" id="dobro" value="1" checked/>
			<label for="dobro">Dobro</label>
			<input type="radio" name="op" id="cubo" value="2"/>
			<label for="cubo">Cubo</label>
			<input type="radio" name="op" id="raiz" value="3"/>
			<label for="raiz">Raiz quadrado</label>
		</fieldset><br/>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>