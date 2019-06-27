<?php

// 1 užduotis++

print $array[1] ;

 // 2 užduotis++

 fieldų indexai:

 'name', 'surname'.

// 3 užduotis--

$form ['fields']['age']['error'] = "Big error";

 // 4 užduotis++

count($form['fields']);

// 5 užduotis++

foreach ($array as $key => $value) {
    print $key;
    0, 1, 2 (indeksai)
}

// 6 užduotis++

foreach ($array as $value) {
    print $value;
    (Matysime - "aš", "galiu" , "nugalėti")
}

// 7 užduotis++

foreach ($array as &$value) {
    $value = "Pergalė";
}

// 8 užuotis-+ (reikejo ne $key['error'] print, o $value['error'])

foreach ($array['fields'] as $key => $value) {
    print $key['error'];
}

// 9 užduotis --

foreach ($array as &$key => $value) {
    $key[] = $key['label'];
    $key['label'] = "ahoy";
}

foreach ($array as $key => &$value){
    $value['label'] = "ahoy";
    print $value;
}

// 10 užduotis

foreach ($array as $key => $value) {
    print $value['fields'];
}
?>