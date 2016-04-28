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
    private $zipCod;
    private $complement;
            
    function __construct() {
        
    }
    function __destruct() {
        
    }
    
    function getStreet(){
       return $this->street;
    }
    function setStreet($streetIn){
        $this->street =$streetIn;
    }
}

