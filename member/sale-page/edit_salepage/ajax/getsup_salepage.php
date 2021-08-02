<?php
	header('Content-Type: application/json');
	include('../../../../conn.php');
	
	$strSQL = "SELECT a.objcode,a.typecode,b.objno,b.text,b.url,b.number,b.price,b.autoplay,b.type FROM `objmaster` as a inner join `objdetail` as b on (a.objcode = b.objcode) ";
	$strSQL .= " where a.spcode = '".$_POST['idcode']."'";
	// $strSQL .= " order by b.,b.objno";
	$query = mysqli_query($conn,$strSQL);
	
	$json_result=array(
        "objcode" => array(),
		"typecode" => array(),
		"objno" => array(),
		"text" => array(),
		"url" => array(),
		"number" => array(),
		"price" => array(),
		"autoplay" => array(),
		"type" => array()
		
        );
        while($row = $query->fetch_assoc()) {
            array_push($json_result['objcode'],$row["objcode"]);
			array_push($json_result['typecode'],$row["typecode"]);
			array_push($json_result['objno'],$row["objno"]);
			array_push($json_result['text'],$row["text"]);
			array_push($json_result['url'],$row["url"]);
			array_push($json_result['number'],$row["number"]);
			array_push($json_result['price'],$row["price"]);
			array_push($json_result['autoplay'],$row["autoplay"]);
			array_push($json_result['type'],$row["type"]);
        }
        echo json_encode($json_result);



?>