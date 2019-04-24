<?php

$grikiai_start = 5000; //Gramai
$grikiai_remaining = $grikiai_start;
$days = 0;


for (; $grikiai_remaining > 0;) {
    $grikiai_remaining -= rand(200, 500);
    $days++;



}

$data = date("Y-M-d", strtotime("+$days days"));

$text = "Jei turėsiu $grikiai_start gramų grikių, galėsiu juos valgyt $days dienų. Jei pradėsiu šiandien,
grikiai baigsis $data";

?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8"
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="includes/grid.css">
    <link rel="stylesheet" href="includes/normalize.css">
    <title>Puslapio pavadinimas</title>
</head>
<body>
     <h1><?php print $text; ?></h1>
</body>
</html>

