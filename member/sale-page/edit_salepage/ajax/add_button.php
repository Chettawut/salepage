<?php
	header('Content-Type: application/json');
    include('../../../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    // $_POST["text"] = 'test';
    // $_POST["objno"] = 1;
    // $_POST["pagecode"] = 2;
    
    $StrSQL = "INSERT INTO object (`objno`,`text`,`pagecode`,`url`,`typecode`,`status`,`date`,`time`) ";
    $StrSQL .= "VALUES (";
    $StrSQL .= "'".$_POST["objno"]."','".$_POST["text"]."','".$_POST["pagecode"]."','','1','','".date("Y-m-d")."','".date("H:i:s")."' ";
    $StrSQL .= ")";
    $query = mysqli_query($conn,$StrSQL);
    
    // echo $StrSQL;


        if($query) {
            echo json_encode(array('status' => '1','message'=> 'เพิ่มข้อความสำเร็จ'));
        }
        else
        {
            echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
        }
    
?>