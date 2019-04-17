<?php

$siukslines_turis = 50; //(dm3)
$siuksliu_turis_avg_per_day = 12;
$max_kaupo_turis = rand(12, 50);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>PHP lydės ir</title> 
    </head>
    <body>
        <h1>Po kelių dienų kils barnis?</h1>
        <p>
            Po <?php
            print $siukslines_turis / $siuksliu_turis_avg_per_day;
            ?> 
            dienų pirk gėlių ir šampano, jeigu nori, kad žmona šiukšles pati išneštų
        </p>
    </body>
</html>



