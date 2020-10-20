<?php

/*Define functions for validating contact form*/
//validating the name for first and last
/*function validContact() {
    return validName($_POST['ffname']) && validName($_POST['flname']) && validEmail($_POST['']) && validPhone($_POST['']);
}*/

function validName($name) {
    return !empty($name);
}

function validEmail($email) {
    return (!preg_match(
        "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email))
        ? FALSE : TRUE;
}

function validPhone($phone)
{
    // Allow +, - and . in phone number
    $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
    // Remove "-" from number
    $phone_to_check = str_replace("-", "", $filtered_phone_number);
    // Check the length of number
    // This can be customized if you want phone number from a specific country
    if (strlen($phone_to_check) < 10 || strlen($phone_to_check) > 14) {
        return false;
    } else {
        return true;
    }
}

function validServices($services) {
    if(empty($services)) {
        return true;
    }
    else {
        return $services != "Constructive Climate" || $services != "Leadership" || $services != "Managing Change"
            || $services != "Morale" || $services != "Organizational Communication" || $services != "Team Effectiveness";
    }
}

function validIndustry($industry) {
    return $industry == "Communication" || $industry == "Consumer" || $industry == "Financial Services"
        || $industry == "Government" || $industry == "Media" || $industry == "Service" || $industry == "Technology"
        || $industry == "Other" || $industry == "none";
}

function validFormat($format) {
    return $format == "Group Training" || $format == "One-on-One Counseling" || $format == "Not Sure";
}

/*function validTextBox($hear) {

    if(empty($hear)) {
        return true;
    }
    else {
        return mysqli_real_escape_string(null,$hear);
    }
}
*/

