<?php
$animali = [
    [
        "Nome" => "Leone",
        "Specie" => "Panthera leo",
        "Classe" => "Mammiferi"
    ],
    [
        "Nome" => "Aquila",
        "Specie" => "Aquila chrysaetos",
        "Classe" => "Uccelli"
    ],
    [
        "Nome" => "Squalo Bianco",
        "Specie" => "Carcharodon carcharias",
        "Classe" => "Pesci"
    ],
    [
        "Nome" => "Cobra Reale",
        "Specie" => "Ophiophagus hannah",
        "Classe" => "Rettili"
    ],
    [
        "Nome" => "Rana Freccia",
        "Specie" => "Dendrobates tinctorius",
        "Classe" => "Anfibi"
    ],
    [
        "Nome" => "Elefante",
        "Specie" => "Loxodonta africana",
        "Classe" => "Mammiferi"
    ],
    [
        "Nome" => "Pinguino Imperatore",
        "Specie" => "Aptenodytes forsteri",
        "Classe" => "Uccelli"
    ],
    [
        "Nome" => "Orca",
        "Specie" => "Orcinus orca",
        "Classe" => "Mammiferi"
    ],
    [
        "Nome" => "Iguana Verde",
        "Specie" => "Iguana iguana",
        "Classe" => "Rettili"
    ],
    [
        "Nome" => "Salamandra Gigante",
        "Specie" => "Andrias davidianus",
        "Classe" => "Anfibi"
    ]
];

$mammiferi = [];
$altro = [];
$pesci = [];
$rettili = [];


foreach ($animali as $animale) {
    if ($animale["Classe"] == "Mammiferi"){
        $mammiferi[] = $animale;
    }
    elseif ($animale["Classe"] == "Pesci"){
        $pesci[] = $animale;
    }
    elseif ($animale["Classe"] == "Rettili"){
        $rettili[] = $animale;
    }
    else{
        $altro[] = $animale;
    }
};