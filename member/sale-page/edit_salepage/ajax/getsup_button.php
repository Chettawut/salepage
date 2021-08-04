<?php
	header('Content-Type: application/json');
	include('../../../../conn.php');

	// $_POST['idcode']=3;
	
	$strSQL = "SELECT text,type FROM `objdetail`  ";
	$strSQL .= " where objcode = '".$_POST['idcode']."'";
	// $strSQL .= " order by b.,b.objno";
	$query = mysqli_query($conn,$strSQL);

	// echo $strSQL;
	
	$json_result=array(
        "fb" => array(),
		"line" => array(),
		"tel" => array()
		
        );

        while($row = $query->fetch_assoc()) {
			if($row["type"]=='fb')
			array_push($json_result['fb'],$row["text"]);
			if($row["type"]=='line')
			array_push($json_result['line'],$row["text"]);
			if($row["type"]=='tel')
			array_push($json_result['tel'],$row["text"]);
        }
        echo json_encode($json_result);



?>