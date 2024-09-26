<?php
include("header.php");
include("navbar.php");
include("sidebar.php"); ?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Data</h1><span id = 'total_count'></span>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Language</li>
                            </ol>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-bullhorn"></i>
                                        Language
                                    </h3>
                                    <div>
                                        <input type="text" id="languageValue" class="form-control mt-5"
                                            placeholder="Add language">
                                        <span>
                                            <button class="btn btn-primary mt-2 " onclick="addLanguage()">
                                                <div id="submitButton"></div>
                                            </button></span>

                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" id="lang_id">
                                </div>

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-hover text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Language</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody id="keyList">
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </div>

</body>
<?php
include('script.php');
include('footer.php');
?>
<script>
    $("#submitButton").html("Add");
    // let languageId = -1;
    function showobject() {
        $.ajax({
            type: 'GET',
            url: 'getLangList.php',
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            success: function (data) {
                let toatalCount = data.total_count
                $('#total_count').html("Total Data : "+toatalCount);
                let showData = data.Records
                let createList = "";
                for (let i = 0; i < showData.length; i++) {
                    createList +=
                        `<tr >         
                    <td ><b>${showData[i].lang}</b></td>
                    <td ><button class="btn btn-primary" onclick="onEdit('${showData[i].lang_id}')">Edit</button></td>
                    <td ><button class="btn btn-danger" onclick="onDelete('${showData[i].lang_id}', '${showData[i].lang}')">Delete</button></td>
             </tr>`;
                }
                $('#keyList').html(createList);
            }
        });

    }
    showobject();


    function addLanguage() {
        let languageVal = $('#languageValue').val();
        let lang_id = $('#lang_id').val();
        let saveLang = {
            languageVal, lang_id
        }
        // data ko hamesha object mai bhejna chahiye......
        // variable se bhej sakte hai pr uska query alag h.....
        if (!languageVal) {
            alert("Please Enter Language")
            return
        } else {
            $.ajax({
                type: 'POST',
                url: 'submitLang.php',
                dataType: 'json',
                data: JSON.stringify(saveLang),
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    if (data.status) {
                        alert(data.message)
                        showobject();
                    $('#lang_id').val("");
                    $('#languageValue').val("");
                    $("#submitButton").html("Add");

                    }
                    
                    //         if (languageId >= 0) {
                    //             language[languageId] = languageVal
                    //             showobject();
                    //             languageId = -1;
                    //         } else {

                    //             language.push(languageVal);
                    //             let newIndex = language.length - 1

                    //             let createList =
                    //                 `<tr >         
                    // <td >${languageVal}</td>
                    // <td ><button onclick="onEdit('${languageVal}','${newIndex}')">Edit</button></td>
                    // <td ><button onclick="onDelete('${languageVal}','${newIndex}')">Delete</button></td>
                    // </tr>`;

                    //             $('#keyList').append(createList);
                    //         }

                }
            })

        }
        

    }

    function onEdit(lang_id) {
        $("#submitButton").html("Update")
        $.ajax({
            url: 'getLangList.php?lang_id=' + lang_id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let editData = data.Records;
                $('#languageValue').val(editData[0].lang)
                $('#lang_id').val(editData[0].lang_id)

            }
        });
        // languageId = index

    }
    function onDelete(lang_id, language) {
        let answer = confirm("Are you sure want to delete Language " + language);
        if(answer){
            $.ajax({
            url: 'langDelete.php?lang_id=' + lang_id,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                if (data==1){
                    showobject();
                } else {
                    alert("Data not deleted!")
                }
              

            } 
        })
        }
        

    }
    //  .append() = already data diya .....new dta usek aage add ho jayega
    // .html() = purane data ko remove krke new table/data add ho jyega mtlb new htm pura aa jyega
</script>