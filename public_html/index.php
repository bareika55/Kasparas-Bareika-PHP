<?php

$draugo_atmintis = [
        'penktadienis',
        'paskaitos',
        'alus',
        'dar vienas alutis',
        'tualetas',
        'cigarete',
        'alutis',
        'sokiai',
];
$mano_atmintis = [
    'Penktadienis',
    'Paskaita',
    'Baras',
    'Viskis',
    'Alus',
    'Degtine',
    'Alus',
    'Pirmadienis',
    'Paskaita'
];

$rand_flashback = rand(0, count($mano_atmintis) - 1);


?>
<!DOCTYPE html>
<html>
    <head>
        <title>Klases daras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Kas buvo penktadienį ?!</h1>
        <h2>Mano atmintis</h2>
        <p>
        <ul> <!-- foreach -->
            <?php foreach($mano_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul><!-- endforeach -->
        </p>
        <?php
        print '#' .$rand_flashback . ': ' . $mano_atmintis[$rand_flashback] ;
        ?>
        <h2>Draugo atmintis</h2>
        <ul> <!-- foreach -->
            <?php foreach($draugo_atmintis as $value): ?>
                <li>
                    <?php print $value; ?>
                </li>
            <?php endforeach; ?>
        </ul><!-- endforeach -->
    </body>
</html>