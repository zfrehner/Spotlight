<?php
//Connect to db
require('/home/jonlaygo/db.php');


$sql3 = "SELECT * FROM gym3 ";
$result3 = mysqli_query($cnxn, $sql3);
if (mysqli_num_rows($result3) > 0) {
    while ($row = mysqli_fetch_assoc($result3)) {
        echo "<p>";
        echo $row['first']." ".$row['last'].", (".$row['gender'].") ".$row['age']." ";
        echo "<br>";
        echo $row['comment']."] ";
        echo "</p>";
    }
} else {
    echo "No one has checked in";
}
?>