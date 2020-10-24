<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/confirmStyle.css">
    <link rel="icon" type="image/png" href="images/spotlightLogo.png">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotlight</title>
</head>

<body id="confirmBody">
<div class="container">
    <h1>Thank you for checking in with<a id="cool"> Spotlight!</a></h1>
    <h3>You are now checked in at your gym!</h3>
    <img id="logo" src="images/spotlightLogo.png" alt="logo">
    <a href="https://nullpointerexception.greenriverdev.com/Spotlight/index.php" >
        <button id="btn-subscribe" type="submit" class="btn btn-warning">Return to Home</button>
    </a>
</div>

<pre>
<?php
//turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

require('validateFunctions.php'); //requires the validation file to be used

//Connect to db
require('db.php');

$isValid = true; // setting up a new variable and initializing it to true

//gets the first name info from the variable and checks if there is a value
//if yes, set the first name to $ffname
//if no, print the required sentence and set $isValid to false
if(validName(trim($_POST['ffname']))) {
    $ffname = trim($_POST['ffname']);
}
else {
    echo "<p>First name is required.</p>";
    $isValid = false;
}

if(validName(trim($_POST['flname']))) {
    $flname = trim($_POST['flname']);
}
else {
    echo "<p>Last name is required.</p>";
    $isValid = false;
}

if(!validAge($_POST['age'])) {
    echo "<p>Invalid age.</p>";
    $isValid = false;
} else {
    $age = $_POST['age'];
}

if (validGender(trim($_POST['gender'])) == true) {
    $gender = trim($_POST['gender']);
} else {
    echo "Invalid gender";
    $isValid = false;
}

if (validGym(trim($_POST['gym'])) == true) {
    $gym = trim($_POST['gym']);
} else {
    echo "Invalid gym";
    $isValid = false;
}

$note = trim($_POST['note']);
if(empty($note)==true) {
    $note = "empty";
    $isValid = true;
}
else {
    $note = $_POST['note'];
    $isValid = true;
}

/*SQL side----------------------------------------------------------------------------------------------------------*/
if(!$isValid) {
    die("Please click back and try again");
}

$firstName = mysqli_real_escape_string($cnxn, $_POST['ffname']);
$lastName = mysqli_real_escape_string($cnxn, $_POST['flname']);
$age = mysqli_real_escape_string($cnxn, $_POST['age']);
$gender = mysqli_real_escape_string($cnxn, $_POST['gender']);
$gym = mysqli_real_escape_string($cnxn, $_POST['gym']); /* not included in sql insert query*/
$note = mysqli_real_escape_string($cnxn, $_POST['note']);

//Write an SQL statement
if($_POST['gym'] == "gym1") {
    $sql = "INSERT INTO `gym1` 
        (`ID`, `first`, `last`, `gender`, `age`, `city`, `state`, `comment`) 
        VALUES(NULL, '$firstName', '$lastName', '$gender', '$age', NULL, NULL, '$note');";
}

if($_POST['gym'] == "gym2") {
    $sql = "INSERT INTO `gym2` 
        (`ID`, `first`, `last`, `gender`, `age`, `city`, `state`, `comment`) 
        VALUES(NULL, '$firstName', '$lastName', '$gender', '$age', NULL, NULL, '$note');";
}

if($_POST['gym'] == "gym3"){
    $sql = "INSERT INTO `gym3` 
        (`ID`, `first`, `last`, `gender`, `age`, `city`, `state`, `comment`) 
        VALUES(NULL, '$firstName', '$lastName', '$gender', '$age', NULL, NULL, '$note');";
}

//Send the query to the database
$result = mysqli_query($cnxn, $sql);
//Print a confirmation
if ($result) {
    echo "TESTING: DATA SUCCESSFULLY ADDED!";
}

//var_dump($_POST);


?>
</pre>
</body>

</html>

