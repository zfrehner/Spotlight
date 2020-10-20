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
    <title>Dayside LLC</title>
</head>

<body id="confirmBody">
<div class="container">
    <h1>Thank you for checking in with<a id="cool"> Spotlight!</a></h1>
    <h3>You are now checked in at your gym!</h3>
    <img id="logo" src="images/spotlightLogo.png" alt="logo">
    <a href="https://jonlaygo.greenriverdev.com/355/Spotlight/index.php" >Return to homepage</a>
</div>

<pre>
<?php
//turn on error reporting
/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/

require('validateFunctions.php'); //requires the validation file to be used

require('/home/nception/daySideDB.php');

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

if(!validEmail(trim($_POST['femail']))) {
    echo "<p>Invalid email address.</p>";
    $isValid = false;
}
else {
    $femail = trim($_POST['femail']);
}

if (validPhone(trim($_POST['fphone'])) == true) {
    $fphone = trim($_POST['fphone']);
} else {
    echo "Invalid phone number";
    $isValid = false;
}

$mailingList = $_POST['mailing-list-short'];
if(isset($mailingList) != "yes") {
    $mailingList = "no";
}
else {
    $mailingList = "yes";
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

//$ffname = $_POST['ffname'];
//$flname = $_POST['flname'];
//$femail = $_POST['femail'];
//$fphone = $_POST['fphone'];

if($isValid) {

    $link = "https://nception.greenriverdev.com/test.html";
    $message2 = "Thank you for signing up DaySide LLC. To unsubscribe, please respond to this email with \"Unsubscribe\". 
    To request more information, click on the link ". " ". $link;
    $message = "Hello, " . $ffname . " " . $flname . " has signed up for your mailing list. Their email is " . $femail . " and their phone number is " . $fphone. " and ".
        "Mailing list sign up is: ". $mailingList. "The note to you is: ". $note;

    $toAddress = "zfrehner@mail.greenriver.edu";
    $subject = "Spotlight Member";
    $header = "New member Alert!";

    //sends email to Owner
    mail($toAddress, $subject, $message, $header);

    //sends email to subscriber

    mail($femail, $subject, $message2, $header );

}

/*SQL side----------------------------------------------------------------------------------------------------------*/
if(!$isValid) {
    die("Please click back and try again");
}

$firstName = mysqli_real_escape_string($cnxn, $_POST['ffname']);
$lastName = mysqli_real_escape_string($cnxn, $_POST['flname']);
$fphone = mysqli_real_escape_string($cnxn, $_POST['fphone']);
$femail = mysqli_real_escape_string($cnxn, $_POST['femail']);
$mailList = mysqli_real_escape_string($cnxn, $_POST['mailing-list-short']);

//Write an SQL statement
$sql = "INSERT INTO `customer` 
        (`ID`, `f_name`, `email`, `phone`, `l_name`, `title`, `company`, `mailing_list`) 
        VALUES(NULL, '$firstName', '$femail', '$fphone', '$lastName', NULL, NULL, '$mailList');";

//Send the query to the database
$result = mysqli_query($cnxn, $sql);
//Print a confirmation
/*if ($result) {
    echo "TESTING: DATA SUCCESSFULLY ADDED!";
}*/

/*var_dump($_POST);*/


?>
</pre>
</body>

</html>

