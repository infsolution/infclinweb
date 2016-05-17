<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Company{
    private $name;
    private $type;
    private $cnpj;
    private $status;
    private $adress;
    private $funcionario;
    function __construct($name, $cnpj){
        $this->name= $name;
        $this->cnpj=$cnpj;
    }
    function __destruct() {
        
    }

    function addCompany(){
        
    }






    //get e set
    function setName($name){
        $this->name=$name;
    }
    function getName(){
        return $this->name;
    }
    function setCnpj($cnpj){
        $this->cnpj=$cnpj;
    }
    function getCnpj(){
        return $this->cnpj;
    }
    function setstatus($status){
        $this->status=$status;
    }
    function getStatus(){
        return $this->status;
    }
    function setType($type){
        $this->type=$type;
    }
    function getType(){
        return $this->type;
    }
    function setAdress($adress){
        $this->adress=$adress;
    }
    function getAdress(){
        return $this->adress;
    }
    function setFuncionario($funcionario){
        $this->funcionario=$funcionario;
    }
    function getFuncionario(){
        return $this->funcionario;
    }
            function toString(){
        return "";
    }
}
