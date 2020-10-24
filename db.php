<?php
// connection file
$database = 'nullpoin_GreenRiverDev';
$username = 'nullpoin';
$password = 'Swineflu2020';
$hostname = 'localhost';
$cnxn = @mysqli_connect($hostname, $username, $password, $database)or die("Error connecting to database: ". mysqli_connect_error());
//echo "connected";
?>
