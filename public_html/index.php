<?php

$sertifikatas = $_POST['sertifikatas'];
$atsakymas = '';

if (isset($_POST['action'])) {
    $atsakymas = $_POST['action'];
} else {
    print 'Užpildyk laukelius';
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Kazkas bl</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
<form action="index.php" method="post">
    <label>
        <input type="text" name="vardas" placeholder="Vardas" required>
        <input type="text" name="pavarde" placeholder="Pavardė" required>
        <input type="number" name="amzius" min="1" max="99" placeholder="Amžius">
        <select name="sertifikatas">
            <option value="Pradedantysis" selected>Pradedantysis</option>
            <option value="Pažengęs">Pažengęs</option>
            <option value="Profesionalas">Profesionalas</option>
        </select>
        <button name="action" value="submit">Send</button>
    </label>
    <ul>
        <li>
            <h1>Tavo vardas:</h1><span><?php print $_POST['vardas']; ?></span>
            <h1>Tavo pavardė:</h1><span><?php print $_POST['pavarde']; ?></span>
            <h1>Tavo amžius:</h1> <span><?php print $_POST['amzius']; ?></span>
            <h1>Tavo IT lygis:</h1> <span><?php print $sertifikatas; ?></span>
        </li>
    </ul>

</body>
</html>

