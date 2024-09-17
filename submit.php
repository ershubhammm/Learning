<?php
if ($_SEVRER['REQUEST-METHOD'] == 'POST') {
    $email = $POST['emailId'];
    $mNumber = $POST['mobileNumber'];
    $name = $POST['name'];
    $fName = $POST['fatherName'];
    $dob = $POST['dateOfBirth'];
    $cast = $POST['category'];
}
?>