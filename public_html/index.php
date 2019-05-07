<?php

$sheep = ['bleeedee KURWA'];

for ($x = 0; $x < 5; $x++) {
    $sheep[] = &$sheep[$x];
}

var_dump($sheep);
