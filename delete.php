<?php
include('connection.php');
$student_id = $_GET["student_id"];
$deleteData = "DELETE FROM student WHERE student_id ='" . $student_id . "'";
// echo $deleteData;
echo mysqli_query(mysql: $conn, query: $deleteData);
?>