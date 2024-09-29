<?php
include("../header.php");
include("../navbar.php");
include("../sidebar.php");
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
                        <li class="breadcrumb-item active">Bank Detail Form</li>
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
                            <h3 class="card-title">Bank Detail Form</h3>
                        </div>

                        <div id="main_error" class=" alert-danger">

                        </div>
                        <div class="card-body row">
                            <div class="form-group col">
                                <label for="acc_holder" class="ml-1">Account Holder:</label>
                                <input type="text" class="form-control" id="acc_holder"
                                    placeholder="Enter Account Holder name" name="acc_holder">
                                <span id="err_acc_name" class="text-danger"></span>
                            </div>
                            <div class="form-group col">
                                <label for="father_name" class="ml-1">Father's Name:</label>
                                <input type="text" class="form-control" id="father_name" placeholder="Enter Father Name"
                                    name="father_name">
                                <span id="err_father" class="text-danger"></span>
                            </div>
                        </div>
                        <div id="bankAccount">

                        </div>


                        <div class="card-footer">
                            <button type="button" onclick="addBankData()" class="btn btn-primary">+</button><span>Add
                                Row for Bank Detail</span>
                        </div>
                        <div class="card-footer">
                            <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
                        </div>
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
                                        <h3 class="card-title"><b>Account Data</b></h3>

                                        <div class="card-tools ">
                                            <div class="input-group input-group-sm " style="width: 150px;">
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
                                                    <th>Account Holder</th>
                                                    <th>Father's Name</th>
                                                    <th>Account Number</th>
                                                    <th>IFSC Code</th>
                                                    <th>Bank Name</th>
                                                </tr>
                                            </thead>
                                            <tbody id="account_list">
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
include('../script.php');
include('../footer.php');
?>
<script>

    let bankData = [

    ];
    function getBankDetail() {
        $.ajax({

        })
    }
    function checkBankDetail() {
        let checkAllValueExist = true;
        for (let i = 0; i < bankData.length; i++) {
            if (!bankData[i].bankName || !bankData[i].ifsc || !bankData[i].account) {
                checkAllValueExist = false;
            }
        }
        return checkAllValueExist
    }
    function submitForm() {
        saveBankData();
        let acc_holder = $('#acc_holder').val();
        let father_name = $('#father_name').val();
        if (!acc_holder || !father_name) {
            alert("Enter name and father name!");
            return;
        }
        if (bankData.length < 1) {
            alert("Add atleast one bank account detail");
            return;
        }

        if (!checkBankDetail()) {
            alert("Please fill Bank data unless delete the extra row!");
            return false;
        }
        let allData = {
            Bank_details: bankData,
            acc_holder,
            father_name
        };
        console.log("allData", allData)

        $.ajax({
            type: 'POST',
            url: 'bankSubmit.php',
            dataType: 'json',
            data: JSON.stringify(allData),
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                alert(data.message)
            }
        })



    }
    function addBankData() {
        saveBankData();
        if (checkBankDetail()) {
            let saveData = {
                bankName: "", ifsc: "", account: ""
            }
            bankData.push(saveData);
            showBankData();
        } else {
            console.log("2");
            alert("Please fill Bank data unless delete the extra row!");
        }
    }

    function saveBankData() {

        let tempData = []
        // console.log($('input[name="bank_name"]'));
        let count = 1;
        $('input[name="bank_name"]').each(function () {
            // console.log($(this).val())
            let obj = {
                bankName: $("#bank" + count).val(), ifsc: $("#ifsc" + count).val(), account: $("#account" + count).val()
            };
            tempData.push(obj);

            count++;
        });
        bankData = tempData


    }

    function showBankData() {
        let bankHtml = "";
        for (let i = 0; i < bankData.length; i++) {

            bankHtml += `<div class="card-body row" id="account${i}" >
                                <div class="form-group col">
                                    <label for="bank_name" class="ml-1">Bank Name</label>
                                    <input type="text" class="form-control" id="bank${i + 1}"
                                        placeholder="Enter Bank Name" name="bank_name" value="${bankData[i].bankName}">
                                    <span id="err_bank" class="text-danger"></span>
                                </div> 
                                <div class="form-group col">
                                    <label for="ifsc_code" class="ml-1">IFSC Code</label>
                                    <input type="text" class="form-control" id="ifsc${i + 1}"
                                        placeholder="Enter Bank Name" name="ifsc_code" value="${bankData[i].ifsc}">
                                    <span id="err_ifsc" class="text-danger"></span>
                                </div>
                                <div class="form-group col">
                                    <label for="acc_number" class="ml-1">Account Number</label>
                                    <input type="text" class="form-control" id="account${i + 1}"    
                                        placeholder="Enter Account Number" name="acc_number" value="${bankData[i].account}">
                                    <span id="err_number" class="text-danger"></span>
                                 </div>`;
            if (i > 0) {
                bankHtml += ` <div class="form-group col">   
                                 <button class="btn btn-primary" style="margin-top:30px"   onclick="closeBankTab('${i}')">-</button>
                            </div>`;
            }

            bankHtml += `</div>`;


        }

        $('#bankAccount').html(bankHtml);

    }
    function closeBankTab(index) {
        bankData.splice(index, 1);

        showBankData();

    }

    // showBankData();
</script>