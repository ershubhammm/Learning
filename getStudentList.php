<?php
include("connection.php");
header('Content-Type: application/json');
$insertSql = 'SELECT * FROM student';
$result = mysqli_query(mysql: $conn, query: $insertSql);
$data = [];
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode([
        'status' => true,
        'Records' => $data,
        'message' => " Data Found"
    ]);
} else {

    echo json_encode([
        'status' => true,
        'Records' => [],
        'message' => "No data Found"
    ]);
}










// print data like console.log
// print_r($data);

// echo "Email = " . $email . ", Mobile Number = " . $mNumber . ", Name = " . $name . ", Father Name = " . $fName . ", DOB = " . $dob . ", Category = " . $cast . ", Languages = " . $language . ", Gender = " . $gender;
?>