<!-- Snack 7
Creare un array contenente qualche alunno di un'ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Questo array dovra' essere inserito in un file separato, da importare.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php 

require_once __DIR__ . '/voti.php';

foreach ($alunni as $alunno) {
    echo $alunno["Nome"] . " " . $alunno["Cognome"] . " " . array_sum($alunno["Voti"]) / count($alunno["Voti"]) . "<br>" ;
};