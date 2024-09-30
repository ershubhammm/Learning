<?php
include("../connection.php");
$data = json_decode(file_get_contents('php://input'), true);

$acc_holder = $data['acc_holder'];
$father_name = $data['father_name'];
$Bank_details = $data['Bank_details'];

$sql = "INSERT INTO bank(acc_holder, father_name) VALUES ('" . $acc_holder . "','" . $father_name . "')";

$result = mysqli_query($conn, $sql);
if ($result) {
    $user_id = mysqli_insert_id($conn);

    for ($i = 0; $i < count($Bank_details); $i++) {
        $bank_name = $Bank_details[$i]["bankName"];
        $ifsc = $Bank_details[$i]["ifsc"];
        $account = $Bank_details[$i]["account"];

        $sql = "INSERT INTO bank_detail(bank_name, ifsc, account, user_id) VALUES ('" . $bank_name . "','" . $ifsc . "','" . $account . "', '" . $user_id . "')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo json_encode([
                "Status" => false,
                "message" => "Unable to insert Account Detail!"
            ]);
            exit();
        }
    }
} else {
    echo json_encode([
        'status' => false,
        'message' => "Unable to insert user Account"
    ]);
    exit();
}


echo json_encode([
    "status" => true,
    "message" => "Data succesfully saved"
]);

?>