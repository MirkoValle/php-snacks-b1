<!-- Snack 1
Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->
<?php
$partite = [
    [
        "squadra1" => "Olimpia Milano",
        "squadra2" => "Cantù",
        "punteggio" => "55" . "-" . "60",
    ],
    [
        "squadra1" => "Virtus Bologna",
        "squadra2" => "Reyer Venezia",
        "punteggio" => "70" . "-" . "65",
    ],
    [
        "squadra1" => "Dinamo Sassari", 
        "squadra2" => "Brindisi", 
        "punteggio" => "80" . "-" . "75",
    ],
    [
        "squadra1" => "Pallacanestro Varese", 
        "squadra2" => "Trento", 
        "punteggio" => "68" . "-" . "72",
    ],
    [
        "squadra1" => "Fortitudo Bologna", 
        "squadra2" => "Treviso", 
        "punteggio" => "74" . "-" . "70",
    ],
    [
        "squadra1" => "Trieste", 
        "squadra2" => "Pesaro", 
        "punteggio" => "65" . "-" . "63",
    ],
    [
        "squadra1" => "Cremona", 
        "squadra2" => "Napoli", 
        "punteggio" => "77" . "-" . "81",
    ],
    [
        "squadra1" => "Pistoia", 
        "squadra2" => "Torino", 
        "punteggio" => "66" . "-" . "70",
    ],
];

foreach ($partite as $partita) {
    echo "<p>" . $partita["squadra1"] ."-". $partita["squadra2"] ."/". $partita["punteggio"] . "</p>";
}