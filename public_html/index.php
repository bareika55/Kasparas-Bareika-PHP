<?php

$skaicius = 0;

if (!empty($_POST)) {
    $skaicius = $_POST['action'];
    $skaicius++;
} else {
    $skaicius = 0;
}

 
var_dump($_POST);
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
    <input type="reset" name="reset" value="Reset">
    <?php for ($x = 0; $x < $skaicius; $x++): ?>
        <img src="https://steemitimages.com/0x0/https://steemitimages.com/DQmXrkRgqnACmZijfxPgUV7XjWthvg1u6PNoXxbtua5YcpB/AW371921_16.gif" width="150px">
    <?php endfor; ?>
</form>
</body>
</html>