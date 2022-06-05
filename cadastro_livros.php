<?php
if(isset($_POST['submit']))
{
print_r($_POST['isbn']);
print_r('<br>');
print_r($_POST['titulo']);
print_r('<br>');
print_r($_POST['genero']);
print_r('<br>');
print_r($_POST['autor']);
print_r('<br>');
print_r($_POST['editora']);
print_r('<br>');
print_r($_POST['ano']);
print_r('<br>');
print_r($_POST['num_pag']);
print_r('<br>');


include_once('config.php');
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$ano = $_POST['ano'];
$num_pag = $_POST['num_pag'];

$result = mysqli_query($conexao,"INSERT INTO livros(isbn,titulo,genero,autor,editora,ano,num_pag)
VALUES('$isbn','$titulo', '$genero', '$autor', '$editora','$ano', '$num_pag')");
header('Location: login.php');
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="TCC-CSS/style(cadastro-livros).css">
	<title>cadastro_livros</title>
	<body background="TCC-CSS/TCC-Imagens/background-cadastro-livros.jpg"
		background-attachment:fixed;
		background-size:100%; >

	</body>
<style>
	
</style>

</head>
<body>
<div class="box">
<form action="cadastro_livros.php" methodo="POST">		<fieldset>
			<legend><b>Cadastro de Livros</b>	
			</legend>
			<br>
			<div class="inputBox">
				<input type="text" name= "isbn" id="isbn" class="inputUser" required>
				<label for="isbn" class="labelInput">ISBN</label>
			 </div>
			 <br><br>
			 <div class="inputBox">
			 	<input type="title" name= "titulo" id="titulo" class="inputUser" required>
				<label for="titulo" class="labelInput">Titulo</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
				<input type="tex" name= "genero" id="genero" class="inputUser" required>
				<label for="genero" class="labelInput">Genero</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
				<input type="autor" name= "autor" id="autor" class="inputUser" required>
				<label for="autor" class="labelInput">autor</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
				<input type="text" name= "editora" id="editora" class="inputUser" required>
				<label for="editora" class="labelInput">editora</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
			 <input type="text" name= "ano" id="ano" class= "inputUser" required>
			 	<label for="ano" class="labelInput">
			 	ano</label>
			 </div>

			 <br><br>
			 <div class="inputBox">
			 <input type="text" name= "num_pag" id="num_pag" class= "inputUser" required>
			 	<label for="num_pag" class="labelInput">
			 	numero de paginas</label>
			 
			 </div>

			 <br><br>
			 <input type="submit" name="submit" id="submit">

		</fieldset>
	</form>
	
</div>
</body>
</html>