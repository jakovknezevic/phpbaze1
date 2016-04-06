<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert</title>
</head>

<body>
<h1>
</h1>

<p>
    <?php

    $conn->query("INSERT INTO automobili (Ime, Registracija) VALUES ('" . $_POST['Ime'] ."','" . $_POST['Registracija'] ."');");

    ?>
    <a href="index.php">Ponovni unos</a>
</p>
</body>
</html>