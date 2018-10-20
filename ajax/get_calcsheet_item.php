<?php
require_once '../includes/dbcon.php';
if(!empty($_POST['type'])){
	$type 		= $_POST['type'];
	$name 		= $_POST['name_startsWith'];
    $h_type 	= $_POST['h_type'];
 	$category 	= $_POST['category'];	
    $query 		= "SELECT * FROM products where  UPPER($type) LIKE '%".strtoupper($name)."%'";
    
	$result = mysqli_query($con, $query);
	$data = array();
	while ($row = mysqli_fetch_assoc($result)) {
		$name = $row['productCode'].'|'.$row['productName'].'|'.$row[$h_type];
		array_push($data, $name);
	}	
	echo json_encode($data);exit;
}

?>