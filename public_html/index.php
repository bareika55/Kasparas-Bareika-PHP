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
            <p><?php $string = "sveiki aš storas";
                  $integer = 122;
                  $float = 12.44777e4;
                  $boolean = true;
                  $array = ['2', '5', 'R', 'K', 'D'];
                  $null = "sdasd";
                  print "String: $string <br>";
                  print "Float: $float <br>";
                  print "Boolean: $boolean <br>";
                 
            ?>
            </p>
     </body>
</html>



