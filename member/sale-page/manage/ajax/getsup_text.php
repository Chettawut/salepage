<?php
	header('Content-Type: application/json');
	include('../../../../conn.php');

	// $_POST['idcode']=3;
	
	$strSQL = "SELECT text FROM `objdetail`  ";
	$strSQL .= " where objcode = '".$_POST['idcode']."'";
	// $strSQL .= " order by b.,b.objno";
	$query = mysqli_query($conn,$strSQL);

	// echo $strSQL;
	
	$json_result=array(
        "text" => array()
        );

        while($row = $query->fetch_assoc()) {
			
			array_push($json_result['text'],$row["text"]);
        }
        echo json_encode($json_result);



?>