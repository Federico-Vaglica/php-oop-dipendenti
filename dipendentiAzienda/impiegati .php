<?php
include_once __DIR__ .'/dipendenti.php';

class Impiegato extends Dipendenti {
    protected $ruolo;
    public function __construct($_name,$_surname,$_age,$_salary,$_ruolo){
        parent::__construct($_name,$_surname,$_age,$_salary);
            $this->ruolo = $_ruolo;
    }
}

$impiegato= new Impiegato('Mario','rossi','23','200','Impiegato');
var_dump($impiegato);