<?php
session_start();
//require 'dao/config.php';
//require 'dao/connection.php';
//require 'dao/database.php';
require 'dao/connect.php';
$con = new Connect();
$link=$con->DBConnection();
$user=$_POST['inf_usuario'];
$passwd=$_POST['inf_senha'];
$clie = $con->DBlogin('user',$user,$passwd);
$con->DBCloseConnection($link);
if($clie){
	$_SESSION['inf_usuario']=$user;
	$_SESSION['inf_senha']=$passwd;
	header('location:home.php');	
}else{
	unset($_SESSION['inf_usuario']);
	unset($_SESSION['inf_senha']);
	header('location:new_index.php');	
}