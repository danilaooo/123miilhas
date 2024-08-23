<?php
	function seguranca_adm(){
		if((empty($_SESSION['usuarioId'])) || (empty($_SESSION['usuarioUSer'])) || (empty($_SESSION['usuarioAcesso']))){		
			$_SESSION['restrita'] = "Área restrita";
			header("Location: login.php");
		}else{
			if($_SESSION['usuarioAcesso'] != "1"){
				$_SESSION['restrita'] = "Área restrita";
				header("Location: login.php");
			}
		}
	}
?>