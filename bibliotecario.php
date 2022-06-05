<?php
if(isset($_POST['submit']))
{
print_r($_POST['nome']);
print_r('<br>');
print_r($_POST['cpf']);
print_r('<br>');
print_r($_POST['senha']);
print_r('<br>');



include_once('config.php');
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = $_POST['senha'];


$result = mysqli_query($conexao,"INSERT INTO bibliotecarios(nome, cpf,senha)
VALUES('$nome','$cpf', '$senha')");
header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="TCC-CSS/style(cadastro-bibliotecario).css">
	<title>Cadastro de Bibliotecário</title>
	<body background="https://einvestidor.estadao.com.br/wp-content/uploads/sites/715/2020/09/board-3695073-1920_040920204005.jpg"
		background-attachment:fixed;
		background-size:100%; >

	</body>


</head>
<body>
<div class="box">
<form action="login.php" methodo="POST">		<fieldset>
			<legend><b>Cadastrar Bibliotecários</b>	
			</legend>
			<br>
			<div class="inputBox">
				<input type="text" name= "nome" id="nome" class="inputUser" required>
				<label for="nome" class="labelInput">NOME</label>
			 </div>
			 <br>
			<div class="inputBox">
				<input type="text" name= "cpf" id="cpf" class="inputUser" required>
				<label for="cpf" class="labelInput">CPF</label>
			 </div>
			 
			 <br>
			 <div class="inputBox">
				<input type="password" name= "senha" id="senha" class="inputUser" required>
				<label for="senha" class="labelInput">Senha</label>
			 </div>

			 
			 <br><br>
			 <input type="submit" name="submit" id="submit">

		</fieldset>
	</form>
	
</div>
</body>
</html>