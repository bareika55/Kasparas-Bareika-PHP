<?php

$page = $_SERVER['PHP_SELF'];
$sec = "1";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body style="text-align: center; background-color: coral;">
        <img src="media/bomba.gif">
            <?php
        print date("s");
        ?>
    </body>
    </html>