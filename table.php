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
<script>
    function showData() {
        $.ajax({
            type: 'GET',
            url: 'getStudentList.php',
            dataType: 'json',
            data: JSON.stringify({}),
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                let showData = data.Records;
                let dataStudentHtml = ""
                for (let i = 0; i < showData.length; i++) {
                    dataStudentHtml +=
                        `<tr>
                        <td id="ID">${showData[i].student_id}</td>
                        <td id="eMail">${showData[i].email}</td>
                        <td id="mNumber">${showData[i].mobile_number}</td>
                        <td id="name">${showData[i].student_name}</td>
                        <td id="fatherName">${showData[i].middle_name}</td>
                        <td id="dob">${showData[i].dob}</td>
                        <td id="caste">${showData[i].category}</td>
                        <td id="language">${showData[i].language}</td>
                        <td id="gender">${showData[i].gender}</td>
                    </tr>`;
                }

                $("#student_list").append(dataStudentHtml)

            }
        })

    }
    showData();   
</script>