<?php

require 'config.php';
require 'connection.php';
require 'database.php';
require 'company.php';
require 'connect.php';
//$name=$_POST['inf_name'];
//$cnpj=$_POST['inf_cnpj'];
//$type=$_POST['inf_type'];
class DCompany{
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function insert($company){
        $con= new Connect();
        $con->DBConnection();
        $comp=array('inf_name'=>$company->name,'inf_cnpj'=>$company->cnpj,'inf_type'=>$company->type,'inf_status'=>$company->status,'inf_id_adress'=>$company->adress);
        $inser = $con->DBInsert('company', $comp);
        return $inser;
    }
}