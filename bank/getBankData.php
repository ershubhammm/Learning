<?php
include("../connection.php");
$data = json_decode(file_get_contents('php://input'), true);


$sql = "SELECT * FROM bank";
$result = mysqli_query($conn, $sql);
echo $result;
?>