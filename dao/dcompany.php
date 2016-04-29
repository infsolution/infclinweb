<?php

require 'config.php';
require 'connection.php';
require 'database.php';
require 'company.php';
$name=$_POST['inf_name'];
$cnpj=$_POST['inf_cnpj'];
class DCompany{
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function insert($company){
        $comp=array('inf_name'=>$company->name,'inf_cnpj'=>$company->cnpj,'inf_type'=>$company->type,'inf_status'=>$company->status,'inf_id_adress'=>$company->adress);
        $inser = DBInsert('company', $comp);
        return $inser;
    }
}