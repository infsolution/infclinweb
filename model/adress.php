<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Adress{
    private $street;
    private $number;
    private $district;
    private $city;
    private $state;
    private $country;
    private $zipCode;
    private $complement;
            
    function __construct() {
        
    }
    function __destruct() {
        
    }
    
    function getStreet(){
       return $this->street;
    }
    function setStreet($street){
        $this->street =$street;
    }
    function setNumber($number){
        $this->number=$number;
    }
    function setDistrict($district){
        $this->district=$district;
    }
    function setCity($city){
        $this->city=$city;
    }
    function setState($state){
        $this->state=$state;
    }
    function setCountry($country){
        $this->country=$country;
    }
    function setZipCode($zipCode){
        $this->zipCode=$zipCode;
    }
    function setComplement($complement){
        $this->complement=$complement;
    }
}

