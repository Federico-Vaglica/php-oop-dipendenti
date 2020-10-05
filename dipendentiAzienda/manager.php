<?php
include_once __DIR__ .'/dipendenti.php';

class Manager extends Dipendenti {
    protected $ruolo;
    public function __construct($_name,$_surname,$_age,$_salary,$_ruolo){
        parent::__construct($_name,$_surname,$_age,$_salary);
            $this->ruolo = $_ruolo;
    }
}

$manager1= new Manager('Mario','rossi','23','200','Manager');
var_dump($manager1);
?>