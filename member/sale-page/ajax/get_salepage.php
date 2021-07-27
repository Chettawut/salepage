<?php
	header('Content-Type: application/json');
	include('../../../conn.php');

	$sql = "SELECT a.salepage_max,b.spcode,b.spname ";
	$sql .= " FROM user as a inner join salepage as b on(a.username=b.username)";  
	$sql .= " where a.username = '".$_POST['username']."' ";  

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
        "salepage_max" => array(),
		"spcode" => array(),
		"spname" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
            array_push($json_result['salepage_max'],$row["salepage_max"]);
			array_push($json_result['spcode'],$row["spcode"]);
			array_push($json_result['spname'],$row["spname"]);
        }
        echo json_encode($json_result);



?>