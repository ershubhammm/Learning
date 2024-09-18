<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['emailId'];
    $mNumber = $_POST['mobileNumber'];
    $name = $_POST['name'];
    $fName = $_POST['fatherName'];
    $dob = $_POST['dob'];
    $cast = $_POST['category'];
    $language = implode(",", $_POST['language']);
    $gender = $_POST['genderValue'];

    // echo "Email = " . $email . ", Mobile Number = " . $mNumber . ", Name = " . $name . ", Father Name = " . $fName . ", DOB = " . $dob . ", Category = " . $cast . ", Languages = " . $language . ", Gender = " . $gender;
    echo "Your data is succesfully saved!";

}
?>