<?php
//Connect to db
require('/home/jonlaygo/db.php');


$sql2 = "SELECT * FROM gym2 ";
$result2 = mysqli_query($cnxn, $sql2);
if (mysqli_num_rows($result2) > 0) {
    while ($row = mysqli_fetch_assoc($result2)) {
        echo "<p>";
        echo $row['first']." ".$row['last'].", (".$row['gender'].") ".$row['age']." ";
        echo "<br>";
        echo $row['city']. ", ". $row['state']." [";
        echo $row['comment']."] ";
        echo "</p>";
    }
} else {
    echo "No one has checked in";
}
?>