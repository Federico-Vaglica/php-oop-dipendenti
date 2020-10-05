<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once __DIR__ .'/../traits/getResidenza.php';
 class Dipendenti {
    use GetResidenza; 
    protected $name;
    protected $surname;
    protected $age;
    protected $salary;

    public function __construct($_name,$_surname,$_age,$_salary){
        if($_name === '' && $_surname === ''){
            die('inserisci un formato valido ');
        } 
        if(!is_numeric($_age) && empty($_age)){
            die('Devi inserie un formato valido per il salario ');
        }

        $this->name = $_name;
        $this->surname = $_surname;
        $this->age=$_age;  
        $this->salary = $_salary;


    }


    public function getParamDipendente() {
        if(empty($this->name) && empty($this->surname)){
            die('Il dipendente non e\' stato registrato ' );
        } 
        return $this -> name .' '. $this->surname . ' '.'Anni: '. $this->age ; 



    }

    public function getSalary() {
        if(empty($this->salary)){
            die('Il sario deve essere ancora inserito');
        }

        return $this->salary;
    }

 }



?>