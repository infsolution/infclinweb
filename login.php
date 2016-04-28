<?php
session_start();
require 'dao/config.php';
require 'dao/connection.php';
require 'dao/database.php';
$user=$_POST['inf_usuario'];
$passwd=$_POST['inf_senha'];
$clie = DBlogin('user',$user,$passwd);
if($clie){
	$_SESSION['inf_usuario']=$user;
	$_SESSION['inf_senha']=$passwd;
	header('location:home.php');	
}else{
	unset($_SESSION['inf_usuario']);
	unset($_SESSION['inf_senha']);
	header('location:new_index.php');	
}