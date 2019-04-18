<?php

$grizai_velai = rand(0,1);
$grizai_isgeres = rand(0, 1);

if ($grizai_isgeres === $grizai_velai){
        $text = 'miegosi ant sofos';
} elseif (!$grizai_velai) {
        $text = 'Nemiegam ant sofos, jeigu grįžau nė vėlai';
} elseif (!$grizai_isgeres){
        $text = 'Nemiegosi ant sofos jei grįžau blaivas';
} else {
        $text = 'Nepisk iš namų ne alkaše';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
    <img src="https://media1.giphy.com/media/9JOMxLFjCWWSk/giphy.gif" style="height: 200px;" alt="mašina">
       <h1>
        <?php print $text; ?>
       </h1>
    </body>
</html>