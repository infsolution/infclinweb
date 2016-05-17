<?php
class Hospital{
    private static $numbMedic = 50;
    private static $numbSecretary=50;
    private static $numbClient = 5000;
     function __construct($name, $cnpj) {
        parent::__construct($name, $cnpj);
    }
    function __destruct() {
        parent::__destruct();
    }
}