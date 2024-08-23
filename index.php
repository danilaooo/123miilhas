<?php
	session_start();
	include_once("seguranca.php");
	seguranca_adm();
	require 'define.php';
require_once('paginas/funcoes.php');
require_once('paginas/header.php');
carrega_pagina();
require_once('paginas/footer.php');

require_once('paginas/config.php');

 ?>

