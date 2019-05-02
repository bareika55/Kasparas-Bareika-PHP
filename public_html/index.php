<?php

function tekstas ($text){
    if(mb_strlen($text)<= 100){
        return $text;
    }
    return mb_strcut($text, 0, 97) . '...';
}
$text2 = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, aut commodi eaque eligendi error et fugiat labore maxime modi nulla odio, officia pariatur quae quidem repellat sapiente, sint. Omnis, praesentium.';

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
    <?php print tekstas($text2); ?>
    </body>
</html>
