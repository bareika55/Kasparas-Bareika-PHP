<?php

$merginos = [
    [
        'vardas' => 'Monika',
        'grazi' => true,
        'protinga' => false,
    ],
    [
        'vardas' => 'Kotryna',
        'grazi' => true,
        'protinga' => true,
    ],
    [
        'vardas' => 'Agne',
        'grazi' => false,
        'protinga' => true,
    ],
    [
        'vardas' => 'Dominyka',
        'grazi' => true,
        'protinga' => true,
    ],
    [
        'vardas' => 'Migle',
        'grazi' => false,
        'protinga' => false,
    ],
    [
        'vardas' => 'Laura',
        'grazi' => true,
        'protinga' => true,
    ],
];

function grazios_merginos ($pretty_girls){
    $kiek = 0;
    foreach ($pretty_girls as $grazios){
        if ($grazios['grazi']){
           $kiek++;
        }
    }
}
function vardai ($names){
    // Random merginų vardai, $names yra paimtas iš $merginos array'ėjaus.

    return $names[rand(0, count($names) - 1)]['vardas'];
}

function merginos($wives){
    $isrinktosios = [];

    foreach ($wives as $mergina){

        if ($mergina['grazi'] && $mergina['protinga']){
            $isrinktosios[] = $mergina['vardas'];
        }
    }

    return $isrinktosios;
}

$isrinktosios_merginos = merginos($merginos);
$random_mergina = vardai($merginos);
?>
<html>
<head>
    <style>
        .pavadinimas {
            border: 1px solid black;
        }

        .aprasymas {
            border: 1px solid black;
        }

        .kaina {
            border: 1px solid black;
        }

        .nuolaida {
            border: 1px solid black;
        }

        .produktas {
            border: 1px solid black;
            width: 120px;
            background-color: #7825FF;
            height: 60px;
            display: inline-block;
            margin: 5px 5px;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/normalize.css">
    <link rel="stylesheet" href="includes/grid.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hey Hey</title>

</head>
<body>
    <div class="produktas">
        <span class="pavadinimas">
            Aloha
        </span>
        <span class="kaina">
            25 litai
        </span>
        <span class="aprasymas">
            Mažas bet nespalvotas
        </span>
        <span class="nuolaida">
            10%
        </span>
    </div>
</body>
</html>