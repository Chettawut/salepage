<?php
	header('Content-Type: application/json');
    include('../../../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

        $StrSQL = "UPDATE objdetail SET `url`= '".$_POST["url"]."',`autoplay`= '".$_POST["autoplay"]."' ";
        $StrSQL .= "WHERE objcode='".$_POST["idcode"]."' ";
        $query = mysqli_query($conn,$StrSQL);    
        

        // echo $StrSQL;
        
            if($query) {
                echo json_encode(array('status' => '1','message'=> 'แก้ไขยูทูปสำเร็จ'));
            }
            else
            {
                echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
            }
?>