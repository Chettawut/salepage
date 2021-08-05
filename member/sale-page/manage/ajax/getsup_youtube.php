<?php
	header('Content-Type: application/json');
	include('../../../../conn.php');

	// $_POST['idcode']=3;
	
	$strSQL = "SELECT url,autoplay FROM `objdetail`  ";
	$strSQL .= " where objcode = '".$_POST['idcode']."'";
	// $strSQL .= " order by b.,b.objno";
	$query = mysqli_query($conn,$strSQL);

	// echo $strSQL;
	
	$json_result=array(
        "url" => array(),
		"autoplay" => array()
        );

        while($row = $query->fetch_assoc()) {
			
			array_push($json_result['url'],$row["url"]);
			array_push($json_result['autoplay'],$row["autoplay"]);
        }
        echo json_encode($json_result);



?>