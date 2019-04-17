<?php

$pinigas_1 = rand(1, 100);
$pinigas_2 = rand(101, 200);
$pinigas_3 = rand(201, 300);
$pinigas_4 = rand(301, 400);
$pinigas_5 = rand(401, 500);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>PHP lydės ir</title> 
    </head>
    <body>
        <div class="body1">
            <h1>
                Skolos skaičiuoklė
            </h1>
            <h3>
                jei paemėi <?php print $pinigas_1;?>eurų
            </h3>
            <h3>
                Su dviem kabančiais grąžinsi <?php print $pinigas_2;?>
            </h3>
            <h3>
                Su vienu kabančiu grąžinsi <?php print $pinigas_3;?>
            </h3>            
        </div>
    </body>
</html>



