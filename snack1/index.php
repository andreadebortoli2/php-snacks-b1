<?php

/* Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */


$matches[] = [

    'casa' => 'Milano',
    'ospite' => 'Roma',
    'risultato' => '50-50',
];


$matches[] = [
    'casa' => 'Napoli',
    'ospite' => 'Treviso',
    'risultato' => '70-70',
];

// var_dump($matches);

foreach ($matches as $key => $value) {
    // var_dump($matches[0]['casa']);
    $casa = $matches[$key]['casa'];
    $ospite = $matches[$key]['ospite'];
    $risultato = $matches[$key]['risultato'];
    echo "$casa - $ospite | $risultato";
    echo '<br>';
}
