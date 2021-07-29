<?php
	header('Content-Type: application/json');
    include('../../../../conn.php');
    date_default_timezone_set('Asia/Bangkok');

    // $_POST["text"] = 'test';
    // $_POST["spno"] = 1;
    // $_POST["spcode"] = 2;
    if($_POST["line"]!=''&&$_POST["fb"]!=''&&$_POST["tel"]!='')
    {
        $StrSQL = "INSERT INTO objmaster (`spno`,`spcode`,`typecode`,`status`,`date`,`time`) ";
        $StrSQL .= "VALUES (";
        $StrSQL .= "'".$_POST["spno"]."','".$_POST["spcode"]."','2','Y','".date("Y-m-d")."','".date("H:i:s")."' ";
        $StrSQL .= ")";
        $query = mysqli_query($conn,$StrSQL);

        $sql = "SELECT objcode ";
        $sql .= "FROM objmaster order by objcode desc LIMIT 1 ";  	

        $query1 = mysqli_query($conn,$sql);

        $row = $query1->fetch_assoc();
        $objcode = $row["objcode"];

        if($_POST["line"]!='')
        {
            $StrSQL = "INSERT INTO objdetail (`objcode`,`objno`,`text`) ";
            $StrSQL .= "VALUES (";
            $StrSQL .= "'".$objcode."','2','".$_POST["line"]."' ";
            $StrSQL .= ")";
            $query2 = mysqli_query($conn,$StrSQL);
        }
    
                
        if($_POST["fb"]!='')
        {
            $StrSQL = "INSERT INTO objdetail (`objcode`,`objno`,`text`) ";
            $StrSQL .= "VALUES (";
            $StrSQL .= "'".$objcode."','2','".$_POST["fb"]."' ";
            $StrSQL .= ")";
            $query2 = mysqli_query($conn,$StrSQL);
        }
        
        if($_POST["tel"]!='')
        {
            $StrSQL = "INSERT INTO objdetail (`objcode`,`objno`,`text`) ";
            $StrSQL .= "VALUES (";
            $StrSQL .= "'".$objcode."','2','".$_POST["tel"]."' ";
            $StrSQL .= ")";
            $query2 = mysqli_query($conn,$StrSQL);
        }

        // echo $StrSQL;
        
            if($query2) {
                echo json_encode(array('status' => '1','message'=> 'เพิ่มปุ่มสำเร็จ'));
            }
            else
            {
                echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
            }
    }
?>