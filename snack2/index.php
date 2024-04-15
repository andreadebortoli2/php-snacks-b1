<?php

/* Snack 2
Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
/* var_dump($name . $email . $age);
var_dump(str_contains($email, '@')); */

/* if (strlen($name) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age)) {
    echo 'ok';
} else {
    echo 'no';
} */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <form action="" method="get">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="age">
        <button type="submit">Click</button>
    </form>

    <div>
        <?php if (strlen($name) > 3 && str_contains($email, '@') && str_contains($email, '.') && is_numeric($age)) {
            echo 'Accesso riuscito';
        } else {
            echo 'Accesso negato';
        } ?>
    </div>
</body>

</html>