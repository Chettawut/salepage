<?php
	header('Content-Type: application/json');
	include('../../../conn.php');

	$sql = "SELECT a.salepage_max,b.pagecode,b.pagename ";
	$sql .= " FROM user as a inner join salepage as b on(a.username=b.username)";  
	$sql .= " where a.username = '".$_POST['username']."' ";  

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
        "salepage_max" => array(),
		"pagecode" => array(),
		"pagename" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
            array_push($json_result['salepage_max'],$row["salepage_max"]);
			array_push($json_result['pagecode'],$row["pagecode"]);
			array_push($json_result['pagename'],$row["pagename"]);
        }
        echo json_encode($json_result);



?>