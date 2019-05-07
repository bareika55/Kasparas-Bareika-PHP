<?php

$sheep = ['bleeedee KURWA'];

for ($x = 0; $x < 5; $x++) {
    $sheep[] = &$sheep[$x];

}

foreach ($sheep as $key => $value) {
    unset($sheep[$key]);
    $sheep[$key] = $value;
}

$sheep[3] = 'Neprisikiškekopūsteliaudavome';

var_dump($sheep);
