<?php

//require 'config.php';
//require 'connection.php';
//require 'database.php';
//require 'company.php';
require 'connect.php';
require '../model/consultorio.php';
require '../model/clinic.php';
require '../model/hospital.php';
$type=$_POST['inf_type'];
$comp=null;
switch ($type){
    case 1:
      $comp = new Consultorio();
      break;
    case 2:
      $comp = new Clinic();
      break;
    case 3;
        $comp = new Hospital();
        break;
}

$adr= new Adress();
$name=$_POST['inf_name'];
$cnpj=$_POST['inf_cnpj'];
$type=$_POST['inf_type'];
$street=$_POST['inf_street'];
$number =$_POST['inf_number'];
$district = $_POST['inf_district'];
$city = $_POST['inf_city'];
$state = $_POST['inf_state'];
$country = $_POST['inf_country'];
$zipCode = $_POST['inf_zip_code'];
$complement = $_POST´['inf_complement'];
$comp->setName($name);
$comp->setCnpj($cnpj);
$comp->setType($type);
$adr->setStreet($street);
$adr->setNumber($number);
$adr->setDistrict($district);
$adr->setCity($city);
$adr->setState($state);
$adr->setCountry($country);
$adr->setZipCode($zipCode);
$adr->setComplement($complement);
$comp->setAdress($adr);

class DCompany{
    
            function __construct() {
        
    }
    function __destruct() {
        
    }
    
    
    
    function getCompName($name){
        $this->compName=$name;
    }
}