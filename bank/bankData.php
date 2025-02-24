<?php
include("../header.php");
include("../navbar.php");
include("../sidebar.php");
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Bank Data</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Bank Data</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">All Bank Data</h3>

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
                                                <th>SR No.</th>
                                                <th>Account Holder</th>
                                                <th>Father Name</th>
                                                <th>Bank Name</th>
                                                <th>IFSC Code</th>
                                                <th>Account Number</th>
                                            </tr>
                                        </thead>
                                        <tbody id="bank_list">

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
</body>
<?php
include('../script.php');
include('../footer.php');
?>
<script>
    function getBankData() {
        $.ajax({
            url: "<?php echo BASE_URL; ?>bank/getBankData.php",
            type: 'GET',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                console.log("showData", data);
                let showData = data.records;
                console.log("showData", showData);
                let createList = "";
                for (let i = 0; i < showData.length; i++) {
                    createList +=
                        `<tr >         
                    <td ><b>${i + 1}</b></td>
                    <td >${showData[i].acc_holder}</td>
                    <td >${showData[i].father_name}</td>
                    <td >${showData[i].bank_name}</td>
                    <td >${showData[i].ifsc}</td>
                    <td >${showData[i].account}</td>
             </tr>`;
                }
                console.log('w');
                $('#bank_list').html(createList);
            }
        });

    }
    getBankData();


</script>