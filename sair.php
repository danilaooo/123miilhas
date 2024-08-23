<?php
	session_start();
	unset(
		$_SESSION['usuarioId'],
		$_SESSION['usuarioUsuario'],
		$_SESSION['usuarioVeis'] ,
		$_SESSION['usuarioSenha']
	);
	
	$_SESSION['loginDeslogado'] = "Deslogado com Sucesso";
	header("Location: login.php");
?>