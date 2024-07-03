<!-- Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.
Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati. -->


<?php

require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/PremiumUser.php";
require_once __DIR__ . "/classes/Membership.php";

$user= new User("Gianni", "Pinotto", "gianni.pin@gmail.com");
$premiumUser = new PremiumUser("Franco", "Baresi", "francobaresi@gmail.com", new Membership("2345HSJK2345"));

var_dump($user, $premiumUser);