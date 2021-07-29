<?php
	header('Content-Type: application/json');
    include('../../../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    // $_POST["text"] = 'test';
    // $_POST["spcode"] = 1;
    // $_POST["spno"] = 2;
    
    $StrSQL = "INSERT INTO objmaster (`spno`,`spcode`,`typecode`,`status`,`date`,`time`) ";
    $StrSQL .= "VALUES (";
    $StrSQL .= "'".$_POST["spno"]."','".$_POST["spcode"]."','4','Y','".date("Y-m-d")."','".date("H:i:s")."' ";
    $StrSQL .= ")";
    $query = mysqli_query($conn,$StrSQL);

    $sql = "SELECT objcode ";
	$sql .= "FROM objmaster order by objcode desc LIMIT 1 ";  	

	$query1 = mysqli_query($conn,$sql);

    $row = $query1->fetch_assoc();
    $objcode = $row["objcode"];

    if($query1) {
        $StrSQL = "INSERT INTO objdetail (`objcode`,`objno`,`url`,`autoplay`) ";
        $StrSQL .= "VALUES (";
        $StrSQL .= "'".$objcode."','1','".$_POST["youtube"]."','".$_POST["autoplay"]."' ";
        $StrSQL .= ")";
        $query2 = mysqli_query($conn,$StrSQL);
    
    
    // echo $StrSQL;

        if($query2) {
            echo json_encode(array('status' => '1','message'=> 'เพิ่มคลิป youtube สำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    }
?>