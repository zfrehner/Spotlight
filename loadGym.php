<?php
//Connect to db
require('/home/jonlaygo/db.php');


$sql1 = "SELECT * FROM gym1 ";
$result1 = mysqli_query($cnxn, $sql1);
if (mysqli_num_rows($result1) > 0) {
    //process the result
    foreach ($result1 as $row) {
        //var_dump($row);
        $first = $row['first'];
        $last = $row['last'];
        $gender = $row['gender'];
        $age = $row['age'];
        $comment = $row['comment'];

        echo "<tr>            
            <td>$first $last</td>
            <td>$gender</td>
            <td>$age</td>
            <td>$comment</td>
            </tr>";
    }
} else {
    echo "The data table will display here";
}
?>

<!--while ($row = mysqli_fetch_assoc($result1)) {
echo "<p>";
    echo $row['first']." ".$row['last'].", (".$row['gender'].") ".$row['age']." ";
    echo "<br>";
    echo $row['comment']."] ";
    echo "</p>";
}-->
