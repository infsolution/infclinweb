<?php
require 'connect.php';
class DAdress{
    function __construct() {
        
    }
    function __destruct() {
        
    }
    function insert($adress){
        $con= new Connect();
        $link=$con->DBConnection();
        $data = array('inf_street'=>$adress->street,
                        'inf_number'=>$adress->number,
                        'inf_district'=>$adress->district,
                        'inf_city'=>$adress->city,
                        'inf_state'=>$adress->state,
                        'inf_country'=>$adress->country,
                        'inf_zip_code'=>$adress->zipCode,
                        'inf_complement'=>$adress->complement);
        $con->DBInsert('adress', $data);
        $con->DBCloseConnection($link);
    }
}