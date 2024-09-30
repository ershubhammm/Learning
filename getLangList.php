<?php
include("connection.php");
$data = json_decode(file_get_contents('php://input'), true);

$lang_id = "";
if (isset($_GET["lang_id"])) {
    $lang_id = $_GET["lang_id"];
}
$sql = 'SELECT * FROM st_lang';
if (!empty($lang_id)) {
    $sql = $sql . " WHERE lang_id ='" . $lang_id . "'";
}
$result = mysqli_query($conn, $sql);

$count = "SELECT COUNT(lang) AS countLanguage FROM st_lang";
$count_result = mysqli_query($conn, $count);

$row1 = mysqli_fetch_assoc($count_result);
$total_count = $row1['countLanguage'];
$data = [];
if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
    echo json_encode([
        'total_count' => $total_count,
        'status' => true,
        'Records' => $data,
        'message' => " Data Found"
    ]);
} else {
    echo json_encode([
        'total_count' => $total_count,
        'status' => true,
        'Records' => $data,
        'message' => " Data not found!"
    ]);
}
?>