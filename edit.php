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

<p>

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
        echo('<td>'. '<a href="edit 2.php?Iden=' .$row['id'] .'"><img src="edit.png"</a>'. '</td>');
        echo('</tr>');

    }
    echo('</table>');
    echo('<br>');
} else {
    echo "Nema automobila";
}
$conn->close();

?>

<?php
    $conn->query("SELECT id FROM automobili WHERE id=".$_POST['Id'])


?>

<form action="index.php">
    <input type="submit" value="Go back to the beginning"><br><br>
</form>

</p>

</body>
</html>