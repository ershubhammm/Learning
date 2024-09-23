<?php
include("connection.php");
header('Content-Type: application/json');
$data = json_decode(file_get_contents('php://input'), true);

// print data like console.log
// print_r($data);

$email = $data['emailId'];
$mNumber = $data['mobileNumber'];
$name = $data['name'];
$fName = $data['fatherName'];
$dob = $data['dob'];
$cast = $data['category'];
$language = implode(",", $data['language']);
$gender = $data['genderValue'];
$student_id = $data['student_id'];


if (empty($email)) {
    echo json_encode([
        'type' => 'err_email',
        'status' => false,
        'message' => "Pleae enter valid Email!"
    ]);
    exit();
}
if (empty($mNumber)) {
    echo json_encode([
        'type' => 'err_mobile',
        'status' => false,
        'message' => "Please enter valid Mobile Number! "
    ]);
    exit();

}
if (empty($name)) {
    echo json_encode([
        'type' => 'err_name',
        'status' => false,
        'message' => "Please enter your name! "
    ]);
    exit();

}
if (empty($fName)) {
    echo json_encode([
        'type' => 'err_fName',
        'status' => false,
        'message' => "Please enter your father name! "
    ]);
    exit();

}
if (empty($dob)) {
    echo json_encode([
        'type' => 'err_date',
        'status' => false,
        'message' => "Please enter valid date of birth! "
    ]);
    exit();
}
if (empty($cast)) {
    echo json_encode([
        'type' => 'err_select',
        'status' => false,
        'message' => "Please selecta any one category! "
    ]);
    exit();
}
if (empty($language)) {
    echo json_encode([
        'type' => 'err_language',
        'status' => false,
        'message' => "Please select atleast one language! "
    ]);
    exit();
}
if (empty($gender)) {
    echo json_encode([
        'type' => 'err_gender',
        'status' => false,
        'message' => "Please select your gender! "
    ]);
    exit();
}

if (empty($student_id)) {
    $check_email = "Select * from student where (email='" . $email . "' or mobile_number='" . $mNumber . "') ";
    $result = mysqli_query(mysql: $conn, query: $check_email);

    if ((mysqli_num_rows($result) > 0)) {
        // $row = mysqli_fetch_assoc($result);

        // if ($email == $row->email) {
        echo json_encode([
            'type' => 'err_email',
            'status' => false,
            'message' => "Email/Mobile Number already exist! "
        ]);
        // }

        exit();
    }

    $sql = "INSERT INTO student( email, mobile_number, student_name, middle_name, dob, category, `language`, gender) 
    VALUES ('" . $email . "', '" . $mNumber . "', '" . $name . "', '" . $fName . "','" . $dob . "', '" . $cast . "', '" . $language . "', '" . $gender . "')";



} else {
    $sql = "UPDATE student
SET student_name='" . $name . "', middle_name='" . $fName . "', dob='" . $dob . "', `language`='" . $language . "', gender='" . $gender . "'
WHERE student_id= '" . $student_id . "' ";
}

$result = mysqli_query($conn, $sql);

if ($result) {
    echo json_encode([
        'status' => true,
        'message' => "New record created successfully"
    ]);
} else {
    echo json_encode([
        'status' => false,
        'type' => 'error',
        'message' => "Error: " . $sql . "<br>" . mysqli_error($conn)
    ]);
}

// echo "Email = " . $email . ", Mobile Number = " . $mNumber . ", Name = " . $name . ", Father Name = " . $fName . ", DOB = " . $dob . ", Category = " . $cast . ", Languages = " . $language . ", Gender = " . $gender;
?>