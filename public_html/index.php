<?php

$hack = $_POST['hack_me'] ?? 'Try!';
$hack = filter_input_array(INPUT_POST, [
    'hack_me' => FILTER_SANITIZE_SPECIAL_CHARS]);

?>
<html>
<body>
<h1><?php print $hack; ?></h1>
<form method="post">
    <input type="text" name="hack_me" placeholder="Hack Me" required>
    <button name="button" value="push">Try</button>
</form>
</body>
</html>