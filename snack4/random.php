<?php

$numbers = [];

while (count($numbers) < 15) {
    $number = random_int(1, 100);

    if (in_array($number, $numbers) == false){
        array_push($numbers, $number);
    };

};

foreach($numbers as $singleNumber) {
    echo $singleNumber . '<br>';
};