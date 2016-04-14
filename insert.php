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

    $conn->query("INSERT INTO automobili (ime, registracija) VALUES ('" . $_POST['Ime'] ."','" . $_POST['Registracija'] ."');");

    ?>

</p>

</body>
</html>