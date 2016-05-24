<?php

session_start();
class Login{
    private $user;
    private $password;
    function __construct($user,$password) {
        $this->user=$user;
        $this->password=$password;
    }
    function login(){
       require 'dao/connect.php';
       $con = new Connect();
       $link=$con->DBConnection();
       $clie = $con->DBlogin('user',$this->user,$this->passwd);
       $con->DBCloseConnection($link);
       if($clie){
	$_SESSION['inf_usuario']=$this->user;
	$_SESSION['inf_senha']=$this->passwd;
	header('location:home.php');	
        }else{
	unset($_SESSION['inf_usuario']);
	unset($_SESSION['inf_senha']);
	header('location:new_index.php');	
}
    }
}

