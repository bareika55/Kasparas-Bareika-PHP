<!DOCTYPE html>
<style>
    body{
        text-align: center;
    }
</style>
 <?php 

date_default_timezone_set('Europe/Vilnius');
?>
<?php

    $color='#';

    $colors = array (0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F');

    for($i=0;$i<6;$i++){

        $color.=$colors[array_rand($colors)];

    }
        
         echo $color;

?>
<?php $fonts = array("Helvetica", "Arial", "Comic Sans", "Tahoma");
shuffle($fonts);
$randomFont = array_shift($fonts);
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>PHP lydės ir<?php print" ".rand(2019, 2029)." - ".rand(1, 12)." - ".rand(1, 31); ?> </title> 
    </head>
    <body style="background-color: <?php echo $color;?> ">
        <h1>Kasparas-Galbūt turėsiu <?php print  rand (1, 5); ?> vaikų/us!</h1>
            <img src="https://media1.tenor.com/images/9cd39f6103e2a6cad13a8a54b4e1ad99/tenor.gif?itemid=8777247" alt="microsoftlogo" style="height:400px;">
            <p style="color:teal;">D.Trumpas nebebus prezidentu <?php print date(rand(2021, 2031)) . date(' M-d'); ?>.</p>
            <img src="https://media0.giphy.com/media/xTiTnHXbRoaZ1B1Mo8/giphy.gif" alt="trumpas">
            <h1 style="font-size: <?php print rand(5, 78) . 'px'; ?>">Aš keičiu savo dydį</h1>
            <p style="color:rgb(<?php print rand(000, 255) . ', ' . rand(000, 255) . ', ' . rand(000, 255);?>)">Aš keičiu savo spalvą</p>
            <img src="media/<?php print rand(1, 6);?>.png">
     </body>
</html>



