<?php
session_start();

include  __DIR__ .'./../config/config.php';
include __DIR__ .'/seguranca.php';
seguranca_adm();
// VERIFICAR SE OS CAMPOS ESTÃO VAZIO

if(isset($_POST['txt_usuario']) && empty($_POST['txt_senha'])):
	header("Location: login.php");
endif;


if(isset($_POST['txt_usuario']) && !empty($_POST['txt_senha'])):
	global $pdo;
$txt_usuario = addslashes(htmlspecialchars_decode($_POST['txt_usuario']));
$txt_senha = addslashes(htmlspecialchars_decode($_POST['txt_senha']));
// VERIFICAR SE O USUÁRIO ADMIN ENCONTRA-SE NO BANCO DE DADOS.

$sql=$pdo->prepare("SELECT * FROM bsk_admin WHERE  email = :email && senha = :senha");
$sql->bindValue(":email", $txt_usuario);
$sql->bindValue(":senha", $txt_senha);
$sql->execute();

if($sql->rowCount() > 0){
	$result1 = $sql->fetch();

	if($result1){
		$_SESSION['usuarioId'] = $result1['id'];
		$_SESSION['usuarioEmail'] = $result1['email'];
		$_SESSION['usuarioSenha'] = $result1['senha'];
		$_SESSION['usuarioUSer'] = $result1['usuario'];
		$_SESSION['usuarioNivel'] = $result1['nivel'];
		$_SESSION['usuarioAcesso'] = $result1['acesso'];

		if($_SESSION['usuarioAcesso'] == "1"){
			header("Location: index.php");
		}else{
			$_SESSION['bloqueado'] = "Usuário {$_SESSION['usuarioUSer']} Bloqueado ";
			header("Location: login.php");
		}

	}

}else{
	$_SESSION['loginErro'] = "Usuário ou senha inválido";
	header("Location: login.php");
}

endif;


?>