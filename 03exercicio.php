<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>3 exercicio</title>
</head>
<body>
	<form method="get" action="03cores.php">
		<label for="itxt">Texto: </label>
		<input type="text" name="t" id="itxt"/><br/>
		<label for="itam">Tamanho</label>
		<select name="tam" id="itam">
			<option value="8pt">8</option>
			<option value="10pt">10</option>
			<option value="14pt" selected>14</option>
			<option value="20pt">20</option>
			<option value="40pt">40</option>
		</select><br/>
		<label for="icor">Cor: </label>
		<input type="color" name="cor" id="icor"/><br/>
		<input type="submit" name="Gerar">
	</form>
</body>
</html>