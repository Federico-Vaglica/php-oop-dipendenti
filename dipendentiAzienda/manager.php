<?php
include_once __DIR__ .'/dipendenti.php';

class Manager extends Dipendenti {
    private $ruolo;
    public function __construct($_name,$_surname,$_age,$_salary = 0,$_ruolo){
        parent::_construct($_name,$_surname,$_age,$_salary = 0);
            $this->ruolo = $_ruolo;
    }
}

$manager1= new Manager('Mario','rossi','23','Manager','ge');
var_dump($manager1);
?>