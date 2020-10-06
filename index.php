<?php
require_once 'dipendentiAzienda/dipendenti.php';
require_once 'dipendentiAzienda/manager.php';
require_once 'dipendentiAzienda/impiegati.php';

try {
    $manager1= new Manager('Mario','rossi','23','200','Manager');
    } catch (Exception $e) {
    echo 'Eccezione: ' . $e->getMessage();
}


    try {
        // $manager1->residenza='';
        echo $manager1->setResidenza('Palermo');
        } catch (Exception $e) {
        echo 'Eccezione: ' . $e->getMessage();
    }


    try {   
        echo $manager1 -> getSalary();
        } catch (Exception $e) {
        echo 'Eccezione: ' . $e->getMessage();
    }

    try {
        echo $manager1 -> getParamDipendente();
        } catch (Exception $e) {
        echo 'Eccezione: ' . $e->getMessage();
    }
    

?>
