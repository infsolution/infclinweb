<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="fr"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="fr"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="fr"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js" lang="fr"> <![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta charset="UTF-8">
	<title>InfClin1.0</title>
	<?php	
	if((!isset($_SESSION['inf_usuario'])== true) and (!isset($_SESSION['inf_senha'])==true)){
		unset($_SESSION['inf_usuario']);
		unset($_SESSION['inf_senha']);
		header('location:nologin.php');
	}
	$logado=$_SESSION['inf_usuario'];
		?>
	</head>
	
	<body>
<h1 align = "center">Sua Clinica</h1>
<h2 align = "center">Login</h2>
	<?php
	echo"<h1 align ='center'>Seja bem vindo $logado!</h1>"
	?>
	<a href="logout.php">sair</a>
  </body>
</html>


