<?php

$avarage = [24, 24, 47, 88, 98];

function avg($array){
    $suma = 0;
    foreach ($array as $value){
        $suma += $value;
    }
    return $suma / count($array);
}
print avg($avarage);
?>

