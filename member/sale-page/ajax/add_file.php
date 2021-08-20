<?php
header('Content-Type: application/json');
include('../../../../conn.php');
date_default_timezone_set('Asia/Bangkok');

    $sql = "SELECT objcode ";
    $sql .= "FROM objmaster order by objcode desc LIMIT 1 ";  
    $query = mysqli_query($conn,$sql);

    $row = $query->fetch_assoc();
    $objcode = $row["objcode"]+1;
    // imagespno
    // imagespcode
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fileName = $_FILES['inputFile']['name'];
        //$fileExt = pathinfo($_FILES["inputFile"]["name"], PATHINFO_EXTENSION);
        $filePath = "../uploads/".$objcode."/".$fileName;
        if (!file_exists('../uploads/'.$objcode)) {
            mkdir('../uploads/'.$objcode, 0777, true);
        }
        
        if (move_uploaded_file($_FILES["inputFile"]["tmp_name"], $filePath)) 
        {
            // echo "Upload success";
            $StrSQL = "INSERT INTO objmaster (`objcode`,`spno`,`spcode`,`typecode`,`status`,`date`,`time`) ";
            $StrSQL .= "VALUES (";
            $StrSQL .= "'".$objcode."','".$_POST["imagespno"]."','".$_POST["imagespcode"]."','3','Y','".date("Y-m-d")."','".date("H:i:s")."' ";
            $StrSQL .= ")";
            $query1 = mysqli_query($conn,$StrSQL);

            if($query1) 
            {
                $StrSQL = "INSERT INTO objdetail (`objcode`,`objno`,`url`) ";
                $StrSQL .= "VALUES (";
                $StrSQL .= "'".$objcode."','','".$fileName."' ";
                $StrSQL .= ")";
                $query2 = mysqli_query($conn,$StrSQL);

                if($query2) {
                    echo json_encode(array('status' => '1','message'=> 'เพิ่มรูปภาพสำเร็จ'));
                }
                else
                {
                    echo json_encode(array('status' => '0','message'=> 'Error insert data!'));
                }            
            }
        } else {
            echo "Upload failed";
        }
    }
?>