<?php
class Clinic{
    private static $numbMedic = 10;
    private static $numbSecretary=10;
    private static $numbClient = 1000;
     function __construct($name, $cnpj) {
        parent::__construct($name, $cnpj);
    }
    function __destruct() {
        parent::__destruct();
    }
}
