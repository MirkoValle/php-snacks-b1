<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->

<?php
$posts = [

'26/06/2024' => [
    [
        'title' => 'Post 1',
        'author' => 'Gianna Sfregola',
        'text' => 'Buongiornissimo caffè'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Francesco Totti',
        'text' => "L'elettrico pe tutti, l'elettrico pe Totti. Daje Roma Dajeeeeee!!!!!"
    ],
],

'25/06/2024' => [
    [
        'title' => 'Post 1',
        'author' => 'Giorgio Armare',
        'text' => 'Acqua di Gio, Giorgio ar mare'
    ]
],

'24/06/2024' => [
    [
        'title' => 'Post 1',
        'author' => 'Al Bano ',
        'text' => 'Felicità'
    ],
    [
        'title' => 'Post 2',
        'author' => 'Geppetto er Falegname',
        'text' => 'geppetto er falegnaaam, si sputa sulle maaaan, e poi va a lavoraaaar'
    ],
    [
        'title' => 'Post 3',
        'author' => 'Paolo La Torre',
        'text' => 'Boom Boom'
    ]
],
];

foreach($posts as $key => $post) {
    echo '<p>' . "Data: " . $key . '</p>';
    
    foreach($post as $singlePost) {
        echo '<p>' . $singlePost['title'] . '</p>';
        echo '<p>' . "Autore: " . $singlePost['author'] . '</p>';
        echo '<p>' . "Messaggio: " . $singlePost['text'] . '</p>';
        echo '<p> -- </p>';
    };
    echo '<p> __________________________ </p>';

}