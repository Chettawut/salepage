<?php
// Start the session
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../../');
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

    <?php include_once('../../import_css.php'); ?>

    <style>

    </style>


</head>

<?php
date_default_timezone_set('Asia/Bangkok');
?>

<body>
    <?php include_once('../../menu_head.php')?>

    <?php include_once('../../menu_left.php')?>
    <?php include_once('../../conn.php')?>

    <?php
    
    $strSQL = "SELECT * FROM `object` as a inner join salepage as b on(a.pagecode = b.pagecode)  where a.pagecode = '".$_POST['selectsp']."'";
	$query = mysqli_query($conn,$strSQL);
	
	$json_result=array(
        "pagecode" => array(),
		"pagename" => array(),
		"stname1" => array(),
		"storage_id" => array(),
		"unit" => array(),
		"stmin1" => array(),
		"stmin2" => array(),
		"sellprice" => array(),
		"status" => array()
		
        );
        while($row = $query->fetch_assoc()) {
            array_push($json_result['pagecode'],$row["pagecode"]);
			array_push($json_result['pagename'],$row["pagename"]);
			// array_push($json_result['stname1'],$row["stname1"]);
			// array_push($json_result['storage_id'],$row["storage_id"]);
			// array_push($json_result['unit'],$row["unit"]);
			// array_push($json_result['stmin1'],$row["stmin1"]);
			// array_push($json_result['stmin2'],$row["stmin2"]);
			// array_push($json_result['sellprice'],$row["sellprice"]);
			// array_push($json_result['status'],$row["status"]);
        }
        
    ?>
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
                            <button type="button" id="btnBack" onclick="location.href='../'" class="btn btn-success"><i
                                    class="fa fa fa-tags" aria-hidden="true"></i>
                                ย้อนกลับ</button>
                                &nbsp;&nbsp;
                            <button type="button" class="btn btn-primary"><i class="fas fa-save"></i>
                                บันทึก</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <input type="hidden" name="objno" id="objno" value="1">
        <input type="hidden" name="pagecode" id="pagecode" value="<?php echo $_POST['selectsp'];?>">
        <input type="hidden" name="txtusername" id="txtusername" value="<?php echo $_SESSION["username"];?>">
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

                <!-- /*****main***** */ -->
                <div class="tab-content" id="myTabContent" style="padding:20px;">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <br>
                        <div class="container-fluid">
                            
                            <!-- <?php echo $_POST['selectsp']; ?> -->
                            <div class="row">
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" style="background-color:#FFF;">ลิงค์:</span>
                                        </div>
                                        <input type="text" id="mainurl" class="form-control"
                                            value="https://jaroon.salepage.com/<?php echo $json_result['pagename'][0];?>" disabled>
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
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"
                                            style="background-color:#FFF;">ลิงค์(สำรอง):</span>
                                    </div>
                                    <input type="text" id="thxmainurl" class="form-control"
                                        value="https://jaroon.salespage.com/<?php echo $json_result['pagename'][0];?>" disabled>
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
                        <br>

                        <div id="cardobject" class="card card-outline card-info align-items-center"
                            style="padding:25px;">
                            <!-- <iframe width="420" height="315" src="https://www.youtube.com/embed/vqwvN8q36JM?autoplay=1">
                            </iframe>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">หัวข้อ</label>
                                <input type="text" class="form-control">
                            </div>

                            <img src="../../img_avatar2.png" width="700" height="500" alt="Flowers in Chania">

                            <img src="../../img/inbox-button.gif" width="200" height="80" alt="Flowers in Chania">
                            <br>
                            <img src="../../img/line-button.gif" width="200" height="80" alt="Flowers in Chania">

                            <p id="countdown" style="text-align: center;font-size: 60px;margin-top: 0px;"></p>

                            <section class="pt-5 pb-5">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-6">
                                            <h3 class="mb-3">Carousel cards title </h3>
                                        </div>
                                        <div class="col-6 text-right">
                                            <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2"
                                                role="button" data-slide="prev">
                                                <i class="fa fa-arrow-left"></i>
                                            </a>
                                            <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2"
                                                role="button" data-slide="next">
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                        <div class="col-12">
                                            <div id="carouselExampleIndicators2" class="carousel slide"
                                                data-ride="carousel">

                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532781914607-2031eca2f00d?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=7c625ea379640da3ef2e24f20df7ce8d">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1517760444937-f6397edcbbcd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=42b2d9ae6feb9c4ff98b9133addfb698">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532712938310-34cb3982ef74?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3d2e8a2039c06dd26db977fe6ac6186a">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532771098148-525cefe10c23?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=3f317c1f7a16116dec454fbc267dd8e4">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532715088550-62f09305f765?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ebadb044b374504ef8e81bdec4d0e840">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1506197603052-3cc9c3a201bd?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=0754ab085804ae8a3b562548e6b4aa2e">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <div class="row">

                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=ee8417f0ea2a50d53a12665820b54e23">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532777946373-b6783242f211?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=8ac55cf3a68785643998730839663129">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src="https://images.unsplash.com/photo-1532763303805-529d595877c5?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=1080&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjMyMDc0fQ&amp;s=5ee4fd5d19b40f93eadb21871757eda6">
                                                                    <div class="card-body">
                                                                        <h4 class="card-title">Special title treatment
                                                                        </h4>
                                                                        <p class="card-text">With supporting text below
                                                                            as a natural lead-in to additional content.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">ชื่อ - นามสกุล</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlInput1">อีเมลล์</label>
                                <input type="text" class="form-control">
                            </div>

                            <h3>ช่องทางการชำระเงิน</h3>

                            <h4>เก็บเงินปลายทาง</h4>

                            <button type="button" class="btn btn-danger form-control">
                                ยืนยันคำสั่งซื้อ
                            </button> -->

                            <div class="card align-items-center" data-toggle="modal" data-target="#modal_add_content"
                                style="width: 18rem;padding:5rem;">
                                <i class="fas fa-plus-circle" style="font-size:150px;color:green"></i>
                                <br>
                                เพิ่มเนื้อหา
                            </div>
                            <input type="text" id="test1">
                            <button type="button" id="btnSave_text" class="btn btn-primary">บันทึก</button>
                        </div>
                    </div>


                    <!-- /*****thx***** */ -->
                    <div class="tab-pane fade" id="thx" role="tabpanel" aria-labelledby="thx-tab">
                        <br>
                        ขอบคุณ
                    </div>

                </div>

            </div>
    </div>

    <?php include_once('modal/add_content.php')?>
    <?php include_once('modal/add_button.php')?>
    <?php include_once('modal/add_text.php')?>

</body>

</html>

<?php include_once('../../import_js.php')?>

<?php include_once('js.php')?>