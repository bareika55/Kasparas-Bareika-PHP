<?php 
$img = 'media/bomba.gif';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>PHP lydės ir<?php print" ".rand(2019, 2029)." - ".rand(1, 12)." - ".rand(1, 31); ?> </title> 
    </head>
    <body style="background-color: <?php echo $color;?> ">
                <?php $string = "sveiki aš storas";
                  $integer = 122;
                  $float = 12.44777e4;
                  $boolean = true;
                  $array = ['2', '5', 'R', 'K', 'D'];
                  $nothing = null;
                  print "String: $string <br>";
                  print "Float: $float <br>";
                  print "Boolean: $boolean <br>";
                  print "Nothing: $nothing";   
            ?>
                <img src="<?php print $img;?>">
                <img src="<?php print $img;?>">
                <img src="<?php print $img;?>">
                <img src="<?php print $img;?>">
    </body>
</html>



