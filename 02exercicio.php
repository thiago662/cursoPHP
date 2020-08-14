<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<title>2 exercicio</title>
</head>
<body>
	<form method="get" action="02idade.php">
		Nome: <input type="text" name="nome">
		Ano de nascimento: <input type="number" name="ano"><br/>
		<fieldset><legend>Sexo</legend>
			<input type="radio" name="sexo" id="masc" value="homem" checked/>
			<label for="masc">Masculino</label><br/>
			<input type="radio" name="sexo" id="fem" value="mulher"/>
			<label for="fem">Feminino</label>
		</fieldset><br/>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>