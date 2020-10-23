<?php
//Connect to db
require('/home/jonlaygo/db.php');


$sql1 = "SELECT * FROM gym1 ";
$result1 = mysqli_query($cnxn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
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
