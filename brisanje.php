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


<form method="post" action="delete.php">
    Upisite Id automobila koji zelite izbrisati:<br>
    <input type="text" name="Id"><br>

    <input type="submit" value="Delete"><br><br>

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

</p>

<form action="index.php">
    <input type="submit" value="Go back to the beginning"><br><br>
</form>

</body>
</html>