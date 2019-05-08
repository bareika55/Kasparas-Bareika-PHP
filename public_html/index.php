<?php

var_dump($_POST);

if (!empty($_POST)) {
    $skaicius = $_POST['action'];
    $skaicius += 1 + $skaicius;
} else {
    $skaicius = 0;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <button name="action" value="<?php print $skaicius; ?>"><?php print $skaicius; ?></button>
        </form>
    </body>
</html>