<?php
include("connection.php"); 
$lang_id = $_GET["lang_id"];
$deleteData = "DELETE FROM st_lang WHERE lang_id ='" . $lang_id . "'";

$result =  mysqli_query(mysql: $conn, query: $deleteData);
echo $result

?>