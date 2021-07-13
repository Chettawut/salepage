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
                <input id="txtusername" type="text" value="<?php echo $_SESSION["username"];?>" >
                <hr>
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> &nbsp;</h3>
                    </div>
                    <div class="card-footer" style="background-color:#b3e6ff">
                        <h1>คุณยังไม่มี salepage</h1>
                    </div>
                </div>

                <hr>
            </div>
        </section>
    </div>

    <?php include_once('modal/add_salepage.php')?>

</body>

</html>

<?php include_once('../import_js.php')?>

<?php include_once('js.php')?>