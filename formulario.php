<?php
if(isset($_POST['submit']))
{
print_r('Nome: ' .$_POST['nome']);
print_r('<br>');
print_r('Email:' .$_POST['email']);
print_r('<br>');
print_r('Senha:' .$_POST['senha']);
print_r('<br>');
print_r('CPF:' .$_POST['cpf']);
print_r('<br>');
print_r('Telefone:' .$_POST['telefone']);
print_r('<br>');
print_r('Sexo:' .$_POST['genero']);
print_r('<br>');
print_r('Data_nascimento:' .$_POST['data_nascimento']);
print_r('<br>');
print_r('Endereco:' .$_POST['endereco']);

include_once('config.php');
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$cpf = $_POST['cpf'];
$sexo = $_POST['genero'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$endereco = $_POST['endereco'];

$result = mysqli_query($conexao,"INSERT INTO usuario(nome,email,senha,cpf,genero,telefone,data_nascimento,endereco)
VALUES($nome,$email,$senha,$cpf,$telefone,$sexo,$data_nascimento,$endereco)");
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="TCC-CSS\style(cadastro-usuario).css">
	<title>Formulario </title>
	<body  >

	</body>

</head>
<body>
<div class="box">

	<form action="formulario.php" method="POST">
		<fieldset>
			<legend><b>Cadastro de Usuários</b>	
			</legend>
			<br>
			<div class="inputBox">
				<input type="tex" name= "nome" id="nome" class="inputUser" required>
				<label for="nome" class="labelInput">Nome Completo</label>
			 </div>
			 
			 <br><br>
			 <div class="inputBox">
				<input type="tex" name= "email" id="email" class="inputUser" required>
				<label for="email" class="labelInput">Email</label>
			 </div>
			 <br><br>
			 <div class="inputBox">
			 	<input type="password" name= "senha" id="senha" class="inputUser" required>
				<label for="senha" class="labelInput">Senha</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
				<input type="cpf" name= "cpf" id="cpf" class="inputUser" required>
				<label for="cpf" class="labelInput">CPF</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
				<input type="tel" name= "telefone" id="telefone" class="inputUser" required>
				<label for="telefone" class="labelInput">Telefone</label>
			 </div>

			 <p>Sexo:</p>
			 <input type="radio" id="feminino" name="genero" value="feminino" required>
			 <label for="feminino">Feminino</label>
			 <br>
			 <input type="radio" id="masculino" name="genero" value="masculino" required>
			 <label for="masculino">Masculino</label>

			 <br><br>
			 <div class="inputBox">
			 	<label for="dataNascimento"><b>Data de Nascimento:</b></label>
				<input type="date" name= "dataNascimento" id="dataNascimento" required>	
			 </div>

			 <br><br>
			 <div class="inputBox">
			 	<label for="endereco"><b>Endereço:</b></label>
				<input type="text" name= "endereco" id="endereco" class="inputUser" required>
			 </div>

			 <br><br>
			 <input type="submit" name="submit" id="submit">
			<br><br>
			<a href="home.php">Voltar</a>
		</fieldset> 
	</form> 
	 
</div> 
</body> 
</html>
