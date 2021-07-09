<?php
// Start the session
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../');
    exit;
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	include_once("idgen.php");
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
                        <h1 class="m-0 text-dark"> <i class="nav-icon fas fa-id-card"></i> บัตรประชาชน</h1>
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
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <center>
                                        <strong class="panelinputtitle">ข้อมูลส่วนตัว</strong>
                                    </center>
                                </div>
                                <div class="panel-body" style="min-height:220px;">
                                    <div class="container-fluid">
                                        <form method="post" enctype="multipart/form-data" id="uploadForm">
                                            <div class="form-group">
                                                <input name="idno" id="idno" class="form-control" type="tel"
                                                    inputmode="numeric" pattern="[0-9\s]{13,19}"
                                                    value="<?php echo @$_POST['idno']; ?>" autocomplete="cc-number"
                                                    maxlength="13" placeholder="เลขที่บัตรประชาชน">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="เลขที่ใต้ภาพ"
                                                    name="idbelow" value="<?php echo @$_POST['idbelow']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <select name="title" id="title" class="form-control">
                                                    <option value="1">นาย</option>
                                                    <option value="2">นาง</option>
                                                    <option value="3">นางสาว</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="ชื่อจริง"
                                                    name="firstname" value="<?php echo @$_POST['firstname']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="นามสกุล"
                                                    name="lastname" value="<?php echo @$_POST['lastname']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Firstname"
                                                    name="firstnameEN" value="<?php echo @$_POST['firstnameEN']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Lastname"
                                                    name="lastnameEN" value="<?php echo @$_POST['lastnameEN']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" class="form-control" name="dateinput"
                                                    placeholder="วันเกิด" value="<?php echo @$_POST['dateinput'];?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-block" name="process"
                                                    value="สร้างบัตร">
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <center>
                                        <strong class="panelinputtitle">ID Card</strong>
                                    </center>
                                </div>
                                <div class="panel-body" style="min-height:230px;">
                                    <center>
                                        <?php
								if($_SERVER['REQUEST_METHOD'] == 'POST'){
									echo '<img src="'.$img2.'">';
								}else{
									echo "<img src='img/id.png' alt='' class='resultimg'/>";
								}
								?>
                                        <br>
                                        <br>
                                        <a id="download" class="btn btn-primary submitBtn"
                                            style="width:210px; margin:5px 0;">Download
                                            ID Card</a>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
    </div>

    <?php include_once('modal/add_content.php')?>
    <?php include_once('modal/add_text.php')?>

</body>

</html>

<?php include_once('../import_js.php')?>

<?php include_once('js.php')?>