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
 $sql = "SELECT registracija, ime FROM automobili WHERE Id=" .$_POST['Id'];
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

    <input type="submit" value="Submit"><br><br>
</form>


<?php

$sql = "SELECT id, registracija, ime FROM automobili";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo('<table>');
    while($row = $result->fetch_assoc()) {
        //echo "Id: " . $row["id"]. " - registracija: " . $row["registracija"]. " -> " . $row["ime"]. "<br>". "<br>";
        echo('<td>' . $row['id'] . '</td>');
        echo('<td>' . $row['registracija'] . '</td>');
        echo('<td>' . $row['ime'] . '</td>');
        echo('</tr>');

    }
    echo('</table>');
} else {
    echo "Nema automobila";
}
$conn->close();

?>

<?php
    $conn->query("SELECT id FROM automobili WHERE id=".$_POST['Id'])




?>

</p>
    <a href="index.php">Povratak na proslu stranicu</a>
</body>
</html>