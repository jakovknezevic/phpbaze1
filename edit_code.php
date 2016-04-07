<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Izmjena</title>
</head>

<body>
<h1>
</h1>

<p>
    <?php

    $conn->query("UPDATE automobili SET registracija='" . $_POST['Registracija'] ."', ime='" . $_POST['Ime'] ."' WHERE Id=" .$_POST['Id']);



    header("Location: edit.php");
    ?>




</p>
    <a href="index.php">Povratak na proslu stranicu</a>
</body>
</html>