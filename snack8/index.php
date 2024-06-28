<!-- Snack 8
        Creare un array di animali, che abbiano nome, specie, classe in un file animals.php. Creo quattro array diversi in cui inserire soltanto mammiferi, pesci, rettili e tutti gli altri. Nel nostro index.php stampiamo in pagina ognuno di questi array. -->

<?php

require_once __DIR__ . '/animals.php';


echo "- Mammiferi" . "<br>";
echo "<br>";
foreach ($mammiferi as $animale) {
    echo "Nome: " . $animale["Nome"] . "<br>";
    echo "Specie: " . $animale["Specie"] . "<br>";
    echo "Classe: " . $animale["Classe"] . "<br>";
    echo "<br>";
};

echo "____________________" . "<br>";
echo "- Pesci" . "<br>";
echo "<br>";
foreach ($pesci as $animale) {
    echo "Nome: " . $animale["Nome"] . "<br>";
    echo "Specie: " . $animale["Specie"] . "<br>";
    echo "Classe: " . $animale["Classe"] . "<br>";
    echo "<br>";
};

echo "____________________" . "<br>";
echo "- Rettili" . "<br>";
echo "<br>";
foreach ($rettili as $animale) {
    echo "Nome: " . $animale["Nome"] . "<br>";
    echo "Specie: " . $animale["Specie"] . "<br>";
    echo "Classe: " . $animale["Classe"] . "<br>";
    echo "<br>";
};

echo "____________________" . "<br>";
echo "- Altro" . "<br>";
echo "<br>";
foreach ($altro as $animale) {
    echo "Nome: " . $animale["Nome"] . "<br>";
    echo "Specie: " . $animale["Specie"] . "<br>";
    echo "Classe: " . $animale["Classe"] . "<br>";
    echo "<br>";
};