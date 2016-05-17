<?php

class Consultorio extends Company{
    private static $numbMedic = 1;
    private static $numbSecretary=1;
    private static $numbClient = 100;
            function __construct($name, $cnpj) {
        parent::__construct($name, $cnpj);
    }
    function __destruct() {
        parent::__destruct();
    }
    
    
}
