<?php
require_once 'dipendentiAzienda/dipendenti.php';
require_once 'dipendentiAzienda/manager.php';
require_once 'dipendentiAzienda/impiegati.php';

$manager1= new Manager('Mario','rossi','23','200','Manager');
var_dump($manager1);


$manager1->residenza='Palermo';
echo $manager1->getResidenza();
?>
