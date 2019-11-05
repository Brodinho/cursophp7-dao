<?php

	require_once("config.php");

	$user = new Usuario();

	$user->loadById(3);
	
	echo $user;

/*
	- Código antigo
	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	echo json_encode($usuarios);
*/
?>