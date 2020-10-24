<?php
//Connect to db
require('db.php');
?>
<table class="table" id="gym2-table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Workout</th>
    </tr>
    </thead>

    <?php
    $sql2 = "SELECT * FROM gym2 ";
    $result2 = mysqli_query($cnxn, $sql2);
    if (mysqli_num_rows($result2) > 0) {
        //process the result
        foreach ($result2 as $row) {
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
    $('#gym2-table').DataTable();
</script>