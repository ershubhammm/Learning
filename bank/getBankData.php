<?php
include("../connection.php");
$data = json_decode(file_get_contents('php://input'), true);

$sql = "SELECT * FROM `bank_detail` join bank on bank.user_id = bank_detail.user_id";
$user_id = $_GET["user_id"];
if ($user_id) {

    $sql = $sql . " where bank.user_id='" . $user_id . "'";
}

// echo $sql;
// exit;


$result = mysqli_query($conn, $sql);

$data = [];
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode([
        "status" => true,
        "records" => $data,
        "message" => "Data Found"
    ]);
} else {
    echo json_encode([
        "status" => true,
        "records" => $data,
        "message" => "Data not found!"
    ]);
}

?>