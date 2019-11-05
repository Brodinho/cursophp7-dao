<?php

	require_once("config.php");

//	Carrega um usuario usuando o login e senha
	$usuario = new Usuario();
	$usuario->login("user1","1234");

	echo $usuario;

// Carrega uma lista de usuários buscando pelo login
//	$search = Usuario::search("se");
//	echo json_encode($search);

//	Carrega uma lista de usuários
//	$lista = Usuario::getList();
//	echo json_encode($lista);


/*  Rotina para carregar apenas um usuário
	$user = new Usuario();
	$user->loadById(3);	
	echo $user;
-------------------------------------------

	- Código antigo
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
*/
?>