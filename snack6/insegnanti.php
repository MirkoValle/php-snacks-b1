<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="gray">
        <?php foreach($db["teachers"] as $teacher){
                echo "Nome: " . $teacher["name"] . '<br>';
                echo "Cognome: " . $teacher["lastname"] . '<br>';
                echo '<br>';
        }  ?>
    </div>

    <div class="green">
    <?php foreach($db["pm"] as $teacher){
                echo "Nome: " . $teacher["name"] . '<br>';
                echo "Cognome: " . $teacher["lastname"] . '<br>';
                echo '<br>';
        }  ?>
    </div>

</body>
</html>