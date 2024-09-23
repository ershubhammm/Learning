<?php
include("connection.php");
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);
$student_id = "";
if (isset($_GET["student_id"])) {
    $student_id = $_GET["student_id"];
}

$insertSql = 'select * FROM student';
if ($student_id) {
    $insertSql = $insertSql . " Where student_id='" . $student_id . "'";
}
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