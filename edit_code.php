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
    $sql = "UPDATE automobili SET registracija='" . $_POST['Registracija'] ."', ime='" . $_POST['Ime'] ."' WHERE id=" .$_POST['Iden'];
    $conn->query($sql);

    //echo($sql);

    header("Location: edit.php");
    ?>

    <?php
    $conn->query("SELECT id FROM automobili WHERE id=".$_POST['Iden'])
    ?>



</p>

</body>
</html>