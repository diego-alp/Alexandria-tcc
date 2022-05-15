<?php
session_start();
include_once(conexao.php);

	$nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$email= filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$senha= filter_input(INPUT_POST), "senha",
	    FILTER_SANITIZE_SENHA);
	$cpf= filter_input(INPUT_POST, "cpf", FILTER_SANITIZE_CPF);
	$telefone= filter_input(INPUT_POST, "telefone", FILTER_SANITIZE);
	$sexo= filter_input(INPUT_POST, "genero"
	    , FILTER_SANITIZE);
	$data_nascimento= filter_input(INPUT_POST, "data_nascimento", FILTER_SANITIZE);
	$endereco= filter_input(INPUT_POST, "endereco", FILTER_SANITIZE);


	//echo "Nome: $nome <br>";
	//echo "E-mail $email <br>";
	//ECHO "Senha $senha <br>";
	//echo "CPF $cpf <br>";
	//echo "Telefone $telefone <br>";
	//echo "Sexo $genero <br>";
    //echo "Data_nascimento $data_nascimento <br>";
	//echo "Endereço $endereco <br>";

	$result_usuario = "INSERT INTO usuarios (nome, email, senha, cpf, telefone, data_nascimentro, endereco created) VALUES ('$nome', '$email', '$senha', '$cpf', '&telefone', '$sexo', '$data_nascimento' '$endereco', NOW())";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	if(mysqli_insert_id($conn)) {
		$_SESSION['msg'] = "<p style="color:green;">Usuário Cadastrado com Sucesso</p>";
      header ("Location: index.php");
	} else{
		$_SESSION['msg'] = "<p style="color:red;">Usuário não foi Cadastrado com Sucesso</p>";
          header ("Location: index.php");

	}