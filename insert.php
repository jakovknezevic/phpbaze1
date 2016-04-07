<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Unos</title>
</head>

<body>
<h1>
</h1>

<p>
    <?php

    $conn->query("INSERT INTO automobili (Ime, Registracija) VALUES ('" . $_POST['Ime'] ."','" . $_POST['Registracija'] ."');");

    ?>

</p>
    <a href="index.php">Povratak na proslu stranicu</a>
</body>
</html>