<!-- Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->

<?php 



if (strlen($_GET["userName"]) > 2 && str_contains($_GET["email"], ".") &&str_contains($_GET["email"], "@") && is_numeric($_GET["age"])) {
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="./email.php" method="GET">
            <input type="text" name="userName" id="userName">
            <input type="text" name="email" id="email">
            <input type="text" name="age" id="age">
            <button type="submit">
                Invia
            </button>
        </form>


</body>
</html>