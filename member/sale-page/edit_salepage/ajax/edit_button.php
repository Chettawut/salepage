<?php
	header('Content-Type: application/json');
    include('../../../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    // $_POST["text"] = 'test';
    // $_POST["spno"] = 1;
    // $_POST["spcode"] = 2;
    


        
            $StrSQL = "UPDATE objdetail SET `text`= '".$_POST["line"]."' ";
            $StrSQL .= "WHERE objcode='".$_POST["id"]."' and type='line' ";
            $query2 = mysqli_query($conn,$StrSQL);    
            
            $StrSQL = "UPDATE objdetail SET `text`= '".$_POST["fb"]."' ";
            $StrSQL .= "WHERE objcode='".$_POST["id"]."' and type='fb' ";
            $query2 = mysqli_query($conn,$StrSQL);
        
        
            $StrSQL = "UPDATE objdetail SET `text`= '".$_POST["tel"]."' ";
            $StrSQL .= "WHERE objcode='".$_POST["id"]."' and type='tel' ";
            $query2 = mysqli_query($conn,$StrSQL);
        

        // echo $StrSQL;
        
            if($query2) {
                echo json_encode(array('status' => '1','message'=> 'แก้ไขปุ่มสำเร็จ'));
            }
            else
            {
                echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
            }
?>