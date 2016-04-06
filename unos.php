<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Unos</title>
</head>

<body>
<h1>
    Unos
</h1>

<p>
<form method="post" action="insert.php">
    Registracija:<br>
    <input type="text" name="Registracija"><br>
    Ime:<br>
    <input type="text" name="Ime"><br><br>

    <input type="submit" value="Submit">

</form>

</p>
    <a href="index.php">Povratak na proslu stranicu</a>
</body>
</html>