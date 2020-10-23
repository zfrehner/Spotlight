<?php
//Connect to db
require('/home/jonlaygo/db.php');
?>
<table id="gym3-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Workout</th>
    </tr>
    </thead>

    <?php
    $sql3 = "SELECT * FROM gym3 ";
    $result3 = mysqli_query($cnxn, $sql3);
    if (mysqli_num_rows($result3) > 0) {
        //process the result
        foreach ($result3 as $row) {
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
</table>

<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> <!--data tables component-->

<script>
    $('#gym3-table').DataTable();
</script>