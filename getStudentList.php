<?php
include("connection.php");
header('Content-Type: application/json');
$insertSql = 'SELECT * FROM student';
$result = mysqli_query(mysql: $conn, $insertSql);






// print data like console.log
// print_r($data);

// echo "Email = " . $email . ", Mobile Number = " . $mNumber . ", Name = " . $name . ", Father Name = " . $fName . ", DOB = " . $dob . ", Category = " . $cast . ", Languages = " . $language . ", Gender = " . $gender;
?>