<?php

function arrayView ($array_key, $color_key){

    $array = [
        'labas',
        'krabas',
        'kalmaras',
        'storas'
    ];
    $color = [
        'black',
        'red',
        'white',
        'blue',
        'green',
        'yellow'
    ];

    foreach ($array as $key => $value){
        $tekstas = $array[$array_key];
    }

    foreach ($color as $key => $value){
        $spalva = $color[$color_key];
    }
    return $tekstas . ' ' . $spalva;
}
print arrayView(3, 3);
?>
<html>
<head>
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

</body>
</html>