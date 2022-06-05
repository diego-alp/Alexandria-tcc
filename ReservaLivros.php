<?php
if(isset($_POST['submit']))
{
print_r('Isbn:' .$_POST['isbn']);
print_r('<br>');
print_r('Titulo:' .$_POST['titulo']);
print_r('<br>');
print_r('Genero:' .$_POST['genero']);
print_r('<br>');
print_r('Autor: ' .$_POST['autor']);
print_r('<br>');
print_r('Editora: ' .$_POST['editora']);
print_r('<br>');
print_r('Date:' .$_POST['data']);
print_r('<br>');
print_r('Ocorrencia:' .$_POST['ocorrencia']);
print_r('<br>');

include_once('config.php');
$isbn = $_POST['isbn'];
$titulo = $_POST['titulo'];
$genero = $_POST['genero'];
$autor = $_POST['autor'];
$editora = $_POST['editora'];
$data = $_POST['data'];
$ocorrencia = $_POST['ocorrencia'];




$result = mysqli_query($conexao,"INSERT INTO usuarios(isbn,titulo,genero,autor,editora,data,ocorrencia)
VALUES($isbn,$titulo,$genero,$autor,$editora,$data,$ocorrencia)");
header('Location: login.php');
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="TCC-CSS/style(reserva-livros).css">
	<title>Formulario</title>
	<body background="https://urbanarts.vteximg.com.br/arquivos/ids/3976570/250221-CAN-165-92.jpg?v=637186405609230000"
		background-attachment:fixed;
		background-size:100%; >

	</body>
<style>
	
</style>

</head>
<body>
<div class="box">
	<form action="formulario.php" methodo="POST">
		<fieldset>
			<legend><b>Livros Emprestados</b>	
			</legend>
            
			 <div class="inputBox">
			 	<input type="isbn" name= "isbn" id="isbn" class="inputUser" required>
				<label for="isbn" class="labelInput">ISBN</label>
			 </div>
			 <br>
			 <div class="inputBox">
				<input type="title" name= "titulo" id="titulo" class="inputUser" required>
				<label for="titulo" class="labelInput">Titulo do Livro</label>
			 </div>
			 <br>
			<div class="inputBox">
				<input type="tex" name= "genero" id="genero" class="inputUser" required>
				<label for="genero" class="labelInput">Genero</label>
			 </div>

			<br>
			<div class="inputBox">
				<input type="tex" name= "autor" id="autor" class="inputUser" required>
				<label for="autor" class="labelInput">Autor do Livro</label>
			 </div>
			 <br>
			 <div class="inputBox">
				<input type="tex" name= "editora" id="editora" class="inputUser" required>
				<label for="editora" class="labelInput">Editora</label>
			 </div>
			 
			 <br>
			 <div class="inputBox">
				<input type="tex" name= "data" id="data" class="inputUser" required>
				<label for="data" class="labelInput">Data do Empréstimo</label>
			 </div>
		
			 <br>
			 <div class="inputBox">
				<input type="tex" name= "ocorrencia" id="ocorrencia" class="inputUser" required>
				<label for="ocorrencia" class="labelInput">Ocorrencia</label>
			 </div>

			 <br>
			 <input type="submit" name="submit" id="submit">

		</fieldset>
	</form>
	
</div>
</body>
</html>


