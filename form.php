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

                        <div id="dataResponse" class="alert-success">

                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form name="theForm" method="post">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="emailId">Email Address</label>
                                    <input type="email" class="form-control" id="emailId" placeholder="Enter email"
                                        oninput="validationForm()" name="emailId">
                                    <span id="err_email" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="mobileNumber">Mobile Number </label>
                                    <input type="number" class="form-control" id="mobileNumber"
                                        placeholder="Enter mobile number" oninput="validationForm()"
                                        name="mobileNumber">
                                    <span id="err_mobile" class="text-danger"></span>
                                </div>
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name"
                                        onblur="validationForm()" name="name">
                                    <span id="err_name" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Father's Name</label>
                                    <input type="text" class="form-control" id="fatherName"
                                        placeholder="Enter Father's name" onblur="validationForm()" name="fatherName">
                                    <span id="err_fName" class="text-danger"></span>
                                </div>

                                <div class=" form-group">
                                    <label for="date" class="col-sm-1 col-form-label">Date</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control" id="dateOfBirth"
                                            onblur="validationForm()" name="dateOfBirth">
                                        <span class="input-group-append">
                                            <span class="input-group-text bg-white d-block">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <span id="err_date" class="text-danger"></span>
                                </div>

                                <div class="form-group">
                                    <label>Category</label>
                                    <select class="custom-select" id="casteCategory" onchange="validationForm()"
                                        name="category">
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
                                            id="english" onclick="validationForm()" name="english">
                                        <label class="form-check-label" for="english">
                                            English
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Hindi"
                                            id="hindi" onclick="validationForm()" name="hindi">
                                        <label class="form-check-label" for="hindi">
                                            Hindi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Marathi"
                                            id="marathi" onclick="validationForm()" name="marathi">
                                        <label class="form-check-label" for="marathi">
                                            Marathi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input valid_check" type="checkbox" value="Urdu"
                                            id="urdu" onclick="validationForm()" name="urdu">
                                        <label class="form-check-label" for="urdu">
                                            Urdu
                                        </label>
                                    </div>
                                    <span id="err_language" class="text-danger"></span>
                                </div>
                                <div>
                                    <label for="">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input find_gender" type="radio" name="gender" id="male"
                                            value="Male" onclick="validationForm()" name="male">
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label><br>
                                        <input class="form-check-input find_gender" type="radio" name="gender"
                                            id="female" value="Female" onclick="validationForm()" name="female">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
include("footer.php");
include("script.php");
?>
<script>
    function submitForm() {
        let emailId = $("#emailId").val();
        let mobileNumber = $("#mobileNumber").val();
        let name = $("#name").val();
        let fatherName = $("#fatherName").val();
        let dob = $("#dateOfBirth").val();
        let category = $("#casteCategory").val();

        let language = []
        let checkBoxes = $('.valid_check[type=checkbox]:checked')

        for (let i = 0; i < checkBoxes.length; i++) {
            language.push(checkBoxes[i].value)
        }

        let genderBoxes = $(".find_gender[type=radio]:checked");
        let genderValue = genderBoxes && genderBoxes[0] ? genderBoxes[0].value : ""
        let saveData = {
            emailId, mobileNumber, name, fatherName, dob, category, language, genderValue
        }
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            // data: $(saveData).serialize(),
            data: saveData,
            // console.log("data", data)
            success: function (data) {
                $('#dataResponse').html(data)

            }
        })
        // console.log(emailId, mobileNumber, name, fatherName, dob, category, language, genderValue)
    }

    function validationForm() {
        let emailId = $('#emailId').val();
        let mNumber = $('#mobileNumber').val();
        let name = $('#name').val();
        let fName = $('#fatherName').val();
        let dob = $('#dateOfBirth').val();
        let category = $('casteCategory').val();
        let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        let mobilePattern = /^[0-9]{10}$/;
        let language = [];
        let checkBoxes = $('.valid_check[type=checkbox]:checked')
        for (let i = 0; i < checkBoxes.length; i++) {
            language.push(checkboxes[i].value)
        }
        let genderBoxes = $('.find_gender[type=radio]:checked');
        let genderValue = genderBoxes || genderBoxes[0] ? genderBoxes[0] : "";


        if (!emailId || emailId == "" || !emailPattern.test(emailId)) {
            // alert("shubham")
            $("#err_email").html("Enter valid Email ID!");
        } else {
            $("#err_email").html("");
        }
        if (!mNumber || mNumber != 10) {
            $('#err_mobile').html("Enter valid Mobile Number")
        } else {
            $('#err_mobile').html("")

        }
        // let saveData = {
        //     emailId, mNumber, fName, dob, category, language, checkBoxes
        // }
    }
</script>



<!-- 
1. mobile number not be less then 10 and not be greater then 10
2. alert will disappear after clicking on input -->