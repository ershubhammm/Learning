<?php
include("connection.php");

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

    $insertSql = "INSERT INTO student( email, mobile_number, student_name, middle_name, dob, category, `language`, gender) 
    VALUES ('" . $email . "', '" . $mNumber . "', '" . $name . "', '" . $fName . "','" . $dob . "', '" . $cast . "', '" . $language . "', '" . $gender . "')";

    $result = mysqli_query($conn, $insertSql);

    if ($result) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>