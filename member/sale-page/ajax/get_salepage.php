<?php
	header('Content-Type: application/json');
	include('../../../conn.php');

	$sql = "SELECT * ";
	$sql .= "FROM user as a ";  
	$sql .= "where a.username = '".$_POST['username']."' ";  

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
        "username" => array(),
		"firstname" => array(),
		"lastname" => array(),
		"salepage_max" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
            array_push($json_result['username'],$row["username"]);
			array_push($json_result['firstname'],$row["firstname"]);
			array_push($json_result['lastname'],$row["lastname"]);
			array_push($json_result['salepage_max'],$row["salepage_max"]);
        }
        echo json_encode($json_result);



?>