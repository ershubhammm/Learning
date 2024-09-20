<?php
include("header.php");
include("navbar.php");
include("sidebar.php");
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
                            <h1>Data</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Application Data</li>
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
                                    <h3 class="card-title">Responsive Hover Table</h3>

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
                                        <tbody>
                                            <tr>
                                                <td>183</td>
                                                <td>Kushshubh46@gmail.com</td>
                                                <td>1234567890</td>
                                                <td>Shubham Kushwaha</td>
                                                <td>Mukhtiar Singh</td>
                                                <td>11-7-2014</td>
                                                <td>OBC</td>
                                                <td>Hindi, English</td>
                                                <td>Male</td>
                                            </tr>
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
include('script.php');
include('footer.php');
?>