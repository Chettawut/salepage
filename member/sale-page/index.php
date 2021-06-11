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
    <meta charset="tis-620">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลเซลเพจ</title>
    <!-- Bootstrap core CSS -->

    <?php include_once('../import_css.php'); ?>

    <style>

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
                        <h1 class="m-0 text-dark"> <i class="nav-icon fa fa-edit"></i> ข้อมูลเซลเพจ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" style="margin-right:10px;" class="btn btn-primary"><i class="fas fa-globe"></i>
                                ยืนยันโดเมน</button>
                            <button type="button" class="btn btn-success"><i class="fas fa-save"></i>
                                บันทึก</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">หน้าหลัก</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="thx-tab" data-toggle="tab" href="#thx" role="tab" aria-controls="thx"
                            aria-selected="false">หน้าขอบคุณ</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="padding:20px;">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" style="background-color:#FFF;">ลิงค์:</span>
                                    </div>
                                    <input type="text" id="mainurl" class="form-control"
                                        value="https://jaroon.salepage.com/jaroon" disabled>
                                </div>

                            </div>
                            <div class="col-2">
                                <div class="btn-group" style="width: 100%" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-edit"></i> จัดการ
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item" href="#">คัดลอกลิ้งค์</a>
                                        <a class="dropdown-item" href="#">ดูตัวอย่าง</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                        <a class="dropdown-item" href="#">Dropdown link</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger form-control"><i class="fas fa-eye"></i>
                                    ดูตัวอย่าง</button>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"
                                            style="background-color:#FFF;">ลิงค์(สำรอง):</span>
                                    </div>
                                    <input type="text" id="mainurl" class="form-control"
                                        value="https://jaroon.salespage.com/jaroon" disabled>
                                </div>

                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-warning form-control"><i class="fas fa-copy"></i>
                                    คัดลอก</button>
                            </div>
                            <div class="col-2">
                                <button type="button" class="btn btn-danger form-control"><i class="fas fa-eye"></i>
                                    ดูตัวอย่าง</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="thx" role="tabpanel" aria-labelledby="thx-tab">
                        <br>
                        ขอบคุณ
                    </div>

                </div>

            </div>
    </div>

    </div>
    </section>
    </div>

</body>

</html>

<?php include_once('../import_js.php')?>