<?php
include("../connection.php");
$data = json_decode(file_get_contents('php://input'), true);

$sql = "SELECT * FROM `bank_detail` join bank on bank.user_id = bank_detail.user_id";

$result = mysqli_query($conn, $sql);
echo $result("");
exit;
$data = [];
while ($row = mysqli_fetch_assoc($result)) {

    echo $data[] = $row;


}
?>