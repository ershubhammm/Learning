<?php
include("connection.php");
$data = json_decode(file_get_contents('php://input'), true);

$lang = $data['languageVal'];
$lang_id = $data['lang_id'];

if (empty($lang)) {
    echo json_encode([
        'type' => 'err_lang',
        'status' => false,
        'message' => "Please enter language!"
    ]);
    exit;
}

if (empty($lang_id)){
    $msg = "created";
    $sql = "INSERT INTO st_lang (lang) 
    VALUES ('" . $lang . "')";

}else {
    $msg = "updated";

    $sql = "UPDATE st_lang SET lang='" . $lang . "' WHERE lang_id= '" . $lang_id . "' ";
}



$result = mysqli_query($conn, $sql);

if ($result) {
    echo json_encode([
        'type' => 'new',
        'status' => true,
        'message' => "Record ".$msg." successfully"
    ]);
} else {
    echo json_encode([
        'status' => false,
        'type' => 'error',
        'message' => "Error: " . $sql . "<br>" . mysqli_error($conn)
    ]);
}

?>