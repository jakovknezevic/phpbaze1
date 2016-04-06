<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Brisanje</title>
</head>

<body>
<h1>
    Brisanje
</h1>

<p>
    <?php

    if ($result = $conn->query("SELECT id FROM automobili WHERE id=".$_POST['Id']))
    {
        if ($result->num_rows==0)
            echo("Zelite izbrisati nepostojeci automobil.");
        else
            echo("Automobil je izbrisan.");

        $result->close();
    }



    $conn->query("DELETE FROM automobili WHERE id=".$_POST['Id']);

    ?>

</p>
    <a href="index.php">Ponovni unos</a>
</body>
</html>