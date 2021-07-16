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
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark"> <i class="nav-icon fa fa-edit"></i> ข้อมูลเซลเพจ</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <br>
                        <ol class="breadcrumb float-sm-right">
                            <!-- <button type="button" style="margin-right:10px;" class="btn btn-primary"><i
                                    class="fas fa-globe"></i>
                                ยืนยันโดเมน</button> -->
                            <!-- <button type="button" class="btn btn-success"><i class="fas fa-save"></i>
                                บันทึก</button> -->
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                <div class="btn-group" id="btnAddSP" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success"><i class="fa fa fa-tags" aria-hidden="true"></i>
                        เพิ่มเซลเพจ</button>
                </div>
                <div class="btn-group" id="btnBack" style="display:none;" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-success"><i class="fa fa fa-tags" aria-hidden="true"></i>
                        ย้อนกลับ</button>
                </div>
                <div class="btn-group" id="btnRefresh" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-primary"><i class="fas fa-sync-alt"></i>
                        Refresh </button>
                </div>
                <input type="hidden" name="txtusername" id="txtusername" value="<?php echo $_SESSION["username"];?>">

                <hr>
                <div class="card card-info">
                    <div class="card-header border-0">
                        <h3 class="card-title">&nbsp;</h3>
                        <div class="card-tools">
                            <!-- <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-download"></i>
                            </a> -->
                            <a href="#" class="btn btn-tool btn-sm">
                                <i class="fas fa-bars"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0">
                        <table id="tablesalepage" class="table table-striped table-hover table-valign-middle">
                            <thead>
                                <tr>
                                    <th style="width:20%;text-align:left">ลำดับ</th>
                                    <th style="width:50%;text-align:left">ชื่อเซลเพจ</th>
                                    <th style="width:20%;text-align:left">สถานะ</th>
                                    <th style="width:10%;text-align:left"></th>
                                </tr>
                            </thead>
                            <tbody>

                                <!-- <tr>
                                    <td>
                                        <img src="dist/img/default-150x150.png" alt="Product 1"
                                            class="img-circle img-size-32 mr-2">
                                        Perfect Item
                                        <span class="badge bg-danger">NEW</span>
                                    </td>
                                    <td>$199 USD</td>
                                    <td>
                                        <small class="text-success mr-1">
                                            <i class="fas fa-arrow-up"></i>
                                            63%
                                        </small>
                                        87 Sold
                                    </td>
                                    <td>
                                        <a href="#" class="text-muted">
                                            <i class="fas fa-search"></i>
                                        </a>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <form style="display: none" action="edit_salepage" method="POST" id="form">
                    <input type="hidden" id="var1" name="var1" value="dd" />
                    <input type="hidden" id="var2" name="var2" value="" />
                </form>


                <hr>
            </div>
        </section>
    </div>

    <?php include_once('modal/add_salepage.php')?>

</body>

</html>

<?php include_once('../import_js.php')?>

<?php include_once('js.php')?>