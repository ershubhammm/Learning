<?php
include("header.php");
include("navbar.php");
include("sidebar.php");

?>
<div class="content-wrapper" style="min-height: 2171.6px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Application Form</h3>
                        </div>

                        <div id="main_error" class=" alert-danger">

                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="theForm" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="emailId">Email Address</label>
                                    <input type="email" class="form-control" id="emailId" placeholder="Enter email"
                                        name="emailId">
                                    <span id="err_email" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile Number </label>
                                    <input type="number" class="form-control" id="mobileNumber"
                                        placeholder="Enter mobile number" name="mobileNumber">
                                    <span id="err_mobile" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                                        name="name">
                                    <span id="err_name" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Father's Name</label>
                                    <input type="text" class="form-control" id="fatherName"
                                        placeholder="Enter Father's name" name="fatherName">
                                    <span id="err_fName" class="text-danger"></span>
                                </div>

                                <div class=" form-group">
                                    <label for="date" class="col-sm-1 col-form-label">Date</label>
                                    <div class="input-group date">
                                        <input type="date" class="form-control" id="dateOfBirth" name="dateOfBirth">
                                        <span class="input-group-append">
                                            <!-- <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span> -->
                                        </span>
                                    </div>
                                    <span id="err_date" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="custom-select" id="casteCategory" name="category">
                                        <option value="">Select Option</option>
                                        <option value="General">General</option>
                                        <option value="OBC">OBC</option>
                                        <option value="SC">SC</option>
                                        <option value="ST">ST</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <span id="err_select" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="">Language You Know</label>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="English"
                                            id="english" name="english">
                                        <label class="form-check-label" for="english">
                                            English
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Hindi"
                                            id="hindi" name="hindi">
                                        <label class="form-check-label" for="hindi">
                                            Hindi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Marathi"
                                            id="marathi" name="marathi">
                                        <label class="form-check-label" for="marathi">
                                            Marathi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Urdu"
                                            id="urdu" name="urdu">
                                        <label class="form-check-label" for="urdu">
                                            Urdu
                                        </label>
                                    </div>
                                    <span id="err_language" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input find_gender" type="radio" name="gender" id="Male"
                                            value="Male" name="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label><br>
                                        <input class="form-check-input find_gender" type="radio" name="gender"
                                            id="Female" value="Female" name="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                                    <span id="err_gender" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
                            </div>
                            <input type="hidden" id="student_id" name="student_id">
                        </form>
                    </div>
                </div>

            </div>
            <div>
                <section class="content">
                    <div class="container-fluid">
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">All Data</h3>

                                        <div class="card-tools">
                                            <div class="input-group input-group-sm" style="width: 150px;">
                                                <input type="text" name="table_search" class="form-control float-right"
                                                    placeholder="Search">

                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-default">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0">
                                        <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Action</th>
                                                    <th>ID</th>
                                                    <th>Email Address</th>
                                                    <th>Mobile Number</th>
                                                    <th>Full Name</th>
                                                    <th>Father's Name</th>
                                                    <th>Date Of Birth</th>
                                                    <th>Category</th>
                                                    <th>Language</th>
                                                    <th>Gender</th>
                                                </tr>
                                            </thead>
                                            <tbody id="student_list">

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </section>
            </div>
        </div>
    </section>
</div>
<?php
// include('table.php');
include("footer.php");
include("script.php");
?>
<script>
    function deleteData() {

    }
    function editData(student_id) {

        $('#emailId').attr('readonly', true);
        $('#mobileNumber').attr('readonly', true);
        // Fetch the student's data to pre-fill the edit form
        $.ajax({
            url: 'getStudentList.php?student_id=' + student_id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                console.log("raj", data.Records)
                let editData = data.Records[0]
                // for (let i = 0; i < editData.length; i++) {
                $('#emailId').val(editData.email);
                $('#mobileNumber').val(editData.mobile_number);
                $('#name').val(editData.student_name);
                $('#fatherName').val(editData.middle_name);
                $('#dateOfBirth').val(editData.dob);
                $('#casteCategory').val(editData.category);
                $('#casteCategory').val(editData.category);
                $('student_id').val(editData.student_id);


                let language = editData.language.split(",");
                let checkBoxes = $('.valid_check[type=checkbox]')

                for (let i = 0; i < checkBoxes.length; i++) {
                    if (language.indexOf(checkBoxes[i].value) >= 0) {
                        checkBoxes[i].checked = true
                    }
                }

                let gender = editData.gender
                console.log("gender", gender)
                $("#" + gender).attr("checked", true);
                $("#student_id").val(editData.student_id)
            }

        });
    }

    function editData2(email_id, mobile_number) {

        // Fetch the student's data to pre-fill the edit form

        // for (let i = 0; i < editData.length; i++) {
        $('#emailId').val(email_id);
        $('#mobileNumber').val(mobile_number);



    }


    function showData() {
        // $("#student_list").html("");
        $.ajax({
            type: 'GET',
            url: 'getStudentList.php',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                let showData = data.Records;
                let dataStudentHtml = ""
                for (let i = 0; i < showData.length; i++) {
                    let colorGr = ((i + 1) % 2) == 0 ? 'color:green' : "color:red"
                    //
                    // <td id="button"><button onclick="editData2('${showData[i].email}','${showData[i].mobile_number}')">Edit</button></td>

                    dataStudentHtml +=
                        `<tr >
                        <td id="button"><button class= 'btn btn-primary' onclick="editData('${showData[i].student_id}')">Edit</button><span><button class= 'btn btn-danger' onclick="deleteData('${showData[i].student_id}')">Delete</button></span></td>
                        <td id="ID" >${showData[i].student_id}</td>
                        <td id="eMail">${showData[i].email}</td>
                        <td id="mNumber">${showData[i].mobile_number}</td>
                        <td id="name">${showData[i].student_name}</td>
                        <td id="fatherName">${showData[i].middle_name}</td>
                        <td id="dob">${showData[i].dob}</td>
                        <td id="caste">${showData[i].category}</td>
                        <td id="language">${showData[i].language}</td>
                        <td id="gender">${showData[i].gender}</td>
                    </tr>`;
                    // $("#student_list").append(dataStudentHtml)
                }

                $("#student_list").html(dataStudentHtml)

            }
        })

    }
    showData();
    function emptyString() {
        let emptyError = ["err_email", "err_mobile", "err_name", "err_fName", "err_date", "err_select", "err_language", "err_gender"];
        for (let i = 0; i < emptyError.length; i++) {
            $("#" + emptyError[i]).html("");
            // console.log("#" + "err_email");
        }
        // console.log("ASDASD")
    }
    function submitForm() {

        emptyString();

        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let emailId = $("#emailId").val();
        let mobileNumber = $("#mobileNumber").val();
        let name = $("#name").val();
        let fatherName = $("#fatherName").val();
        let dob = $("#dateOfBirth").val();
        let category = $("#casteCategory").val();
        let student_id = $('#student_id').val()

        let language = []
        let checkBoxes = $('.valid_check[type=checkbox]:checked')

        for (let i = 0; i < checkBoxes.length; i++) {
            language.push(checkBoxes[i].value)
        }

        let genderBoxes = $(".find_gender[type=radio]:checked");
        let genderValue = genderBoxes && genderBoxes[0] ? genderBoxes[0].value : ""
        let saveData = {
            emailId, mobileNumber, name, fatherName, dob, category, language, genderValue, student_id
        }
        console.log('saveData', saveData)
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            dataType: 'json',
            data: JSON.stringify(saveData),
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                console.log("data", data)
                if (data.status) {
                    alert("1")
                    showData();
                    resetList();
                    $('#emailId').attr('readonly', false);
                    $('#mobileNumber').attr('readonly', false);
                } else {
                    if (data.type == 'error') {
                        $('#main_error').html(data.message);

                    } else {
                        $('#' + data.type).html(data.message);

                    }
                }
                // if (data.type == "email") {
                //     $('#err_email').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "mNumber") {
                //     $('#err_mobile').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "name") {
                //     $('#err_name').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "fName") {
                //     $('#err_fName').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "dob") {
                //     $('#err_date').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "cast") {
                //     $('#err_select').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "language") {
                //     $('#err_language').html(data.message);
                //     // console.log("as",)
                // }
                // if (data.type == "gender") {
                //     $('#err_gender').html(data.message);
                //     // console.log("as",)
                // }
            },
            error: function (xhr, status, error) {
                console.log('Error:', error);
            }
        })
    }

    function resetList() {
        let resetList = ["emailId", "mobileNumber", "name", "fatherName", "dateOfBirth", "casteCategory"]
        for (let i = 0; i < resetList.length; i++) {
            $("#" + resetList[i]).val("");
        }


        let checkBoxes = $('.valid_check[type=checkbox]:checked')
        console.log("check", checkBoxes)
        for (let i = 0; i < checkBoxes.length; i++) {
            checkBoxes[i].checked = false
        }

        let genderBoxes = $('.find_gender[type=radio]:checked')
        genderBoxes[0].checked = false
        // radioBoxes.checked = false

    }

    function validationForm() {
        //     let emailId = $('#emailId').val();
        //     let mNumber = $('#mobileNumber').val();
        //     let name = $('#name').val();
        //     let fName = $('#fatherName').val();
        //     let dob = $('#dateOfBirth').val();
        //     let category = $('casteCategory').val();
        //     let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        //     let mobilePattern = /^[0-9]{10}$/;
        //     let language = [];
        //     let checkBoxes = $('.valid_check[type=checkbox]:checked')
        //     for (let i = 0; i < checkBoxes.length; i++) {
        //         language.push(checkboxes[i].value)
        //     }
        //     let genderBoxes = $('.find_gender[type=radio]:checked');
        //     let genderValue = genderBoxes || genderBoxes[0] ? genderBoxes[0] : "";


        //     if (!emailId || emailId == "" || !emailPattern.test(emailId)) {
        //         // alert("shubham")
        //         $("#err_email").html("Enter valid Email ID!");
        //     } else {
        //         $("#err_email").html("");
        //     }
        //     if (!mNumber || mNumber != 10) {
        //         $('#err_mobile').html("Enter valid Mobile Number")
        //     } else {
        //         $('#err_mobile').html("")

        //     }
        //     // let saveData = {
        //     //     emailId, mNumber, fName, dob, category, language, checkBoxes
        //     // }
    }


</script>



<!-- 
1. mobile number not be less then 10 and not be greater then 10
2. alert will disappear after clicking on input -->