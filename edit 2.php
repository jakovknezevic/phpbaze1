<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Izmjena</title>
</head>

<body>
<h1>
    Izmjena
</h1>
<?php
 $sql = "SELECT registracija, ime FROM automobili WHERE id=" .$_GET['Iden'];
 $result = $conn->query($sql);
 if ($result->num_rows > 0) {
     $auto = $result->fetch_assoc();

 }
else {
    echo('nema auta');
}


?>
<p>
<form method="post" action="edit_code.php">
    Registracija:<br>
    <input type="text" name="Registracija" value="<?php echo($auto['registracija']); ?>"><br>
    Ime:<br>
    <input type="text" name="Ime" value="<?php echo($auto['ime']); ?>"><br><br>

    <input type="hidden" name="Iden" value="<?php echo($_GET['Iden']); ?>">

    <input type="submit" value="Submit"><br><br>
</form>


<form action="index.php">
    <input type="submit" value="Go back to the beginning"><br><br>
</form>

</p>

</body>
</html>