<?php

$paragrafo = "Molto tempo fa, nella Seconda Era della Terra di Mezzo, furono forgiati diciannove grandi Anelli, ciascuno dei quali accordava lunga vita e poteri magici a chi lo portasse. Ma Sauron, l'Oscuro Signore di Mordor, forgiò un Anello Sovrano, amalgamando al suo oro fuso il proprio sangue e la linfa vitale. Con esso intendeva portare tutti gli altri Anelli sotto il suo dominio. Lo forgiò nelle viscere del monte Fato e su di esso pronunciò l'Incantesimo dell'Anello che gli avrebbe conferito il potere: 'Un Anello per domarli, un Anello per trovarli, un Anello per ghermirli e nel buio incatenarli'. Adesso, il futuro della civiltà dipende dal destino dell'Anello Sovrano, che il fato ha deposto nelle mani di un giovane Hobbit di nome Frodo Baggins, che, ereditato l'Anello, entra nella leggenda";

$paragrafi = explode(".", $paragrafo);

foreach($paragrafi as $riga){
    echo $riga . "." .  '<br>';
};