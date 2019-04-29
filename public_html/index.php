<?php

$ataskaita = [
    [
     'name' => 'Rimi darbo užmokestis',
    'amount' => 800,
    ],
    [
      'name' => 'Traukinio bilietas',
      'amount' => -10,
    ],
    [
        'name' => 'Čili pica',
        'amount' => -25,
    ],
    [
        'name' => 'Dviračio remontas',
        'amount'=> -115,
    ],
];
$visos_islaidos = 0;
$visos_iplaukos = 0;
$balansas = 0;

foreach ($ataskaita as $key => $irasas) {
    if ($irasas['amount'] > 0) {
        $visos_iplaukos += $irasas['amount'];
        $css_class = 'positive';
    } else {
        $visos_islaidos -= $irasas['amount'];
        $css_class = 'negative';
    }
}

    $balansas += $irasas['amount'];

    $text = "Balansas: $balansas Eur";
    $text2 = "Visos išlaidos: $visos_islaidos Eur";
    $text3 = "Visos įplaukos: $visos_iplaukos Eur";

?>

<!doctype html>
<html>
<head>
    <style>
    .positive {
        color: green;
    }

    .negative {
        color: red;
    }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pirmadienis (array)</title>
</head>
<body>
    <ul>
        <?php foreach ($ataskaita as $irasas): ?>
        <li class="<?php $irasas['css_class']; ?>">
            <span><?php print $irasas['name']; ?></span>
            <span><?php print $irasas['amount']; ?></span>
        </li>
        <?php endforeach; ?>
    </ul>
    <p><?php print $text; ?> </p>
    <p><?php print $text2; ?> </p>
    <p><?php print $text3; ?> </p>
</body>
</html>