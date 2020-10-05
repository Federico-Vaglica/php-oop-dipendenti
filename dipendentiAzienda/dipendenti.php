<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

 class Dipendenti {
    private $name;
    private $surname;
    private $age;
    private $salary;
    public $repart;

    public function setParamDipendente ($_name,$_surname,$_age){
        if($_name && $_surname === ''){
            die('inserisci un formato valido ');
        } 

        if(!is_numeric($_age) && empty($_age)){
            die('Devi inserie un formato valido per l eta');
        }

        $this->name = $_name;
        $this->surname = $_surname;
        $this->age=$_age;
        
    }

    public function getParamDipendente() {
        if(empty($this->name) && empty($this->surname)){
            die('Il dipendente non e\' stato registrato ' );
        } 
        return $this -> name;



    }

 }

 $dipendente1 = new Dipendenti();
 $dipendente1 ->setParamDipendente('Gianni','Mario','24');
 echo $dipendente1 -> getParamDipendente();
 


?>