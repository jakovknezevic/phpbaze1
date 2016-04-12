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
    $sql = "UPDATE automobili SET registracija='" . $_POST['Registracija'] ."', ime='" . $_POST['Ime'] ."' WHERE Id=" .$_POST['Id'];
    $conn->query($sql);

    echo($sql);

    //header("Location: edit.php");
    ?>

    <?php
    $conn->query("SELECT Id FROM automobili WHERE Id=".$_POST['Id'])




    ?>



</p>
    <a href="index.php">Povratak na proslu stranicu</a>
</body>
</html>