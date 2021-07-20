<?php
// Start the session
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../');
    exit;
}
	 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลเซลเพจ</title>
    <!-- Bootstrap core CSS -->

    <?php include_once('../import_css.php'); ?>

    <style>
    table[name=tableUser] {
        border-top: 1px solid #00BFFF;

    }

    table[name=tableUser] th {
        font-size: 16px;
        color: #fff;
        line-height: 1.4;
        background-color: #3C8DBB;
        border: 0px solid black;
    }


    table[name=tableUser] tr:hover {
        background-color: #DCDCDC;
    }
    </style>


</head>

<?php
date_default_timezone_set('Asia/Bangkok');
?>

<body>

    <?php include_once('../menu_head.php')?>

    <?php include_once('../menu_left.php')?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> <i class="nav-icon fa fa-users"></i> จัดการสมาชิก</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <br>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <div class="btn-group" id="btnAdd" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i
                            class="fa fa-plus-circle" aria-hidden="true"></i>
                        เพิ่มผู้ใช้</button>
                    <button type="button" id="btnRefresh" class="btn btn-primary"><i class="fa fa-refresh"
                            aria-hidden="true"></i> Refresh</button>
                </div>
                <br>
                <br>


                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- /////////////////////////////////////////////////////// HOME ///////////////////////////////////// -->
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <div style="border: 1px solid #FAEBD7;">
                            <div id="mainUser">
                                <table name="tableUser" id="tableUser" class="table table-bordered table-striped">
                                    <thead style=" background-color:#D6EAF8;">
                                        <tr>
                                            <th>Username</th>
                                            <th>ชื่อ</th>
                                            <th>ประเภท</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>

    <?php include_once('modal/add_user.php')?>
    <?php include_once('modal/edit_user.php')?>

</body>

</html>

<?php include_once('../import_js.php')?>

<?php include_once('js.php')?>