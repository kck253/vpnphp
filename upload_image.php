<?php

require_once __DIR__ .'/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->test2021;
$tbl = $db->table2021 ;
 
	// Type your website name or domain name here.
	$domain_name = "http://192.168.43.55/vpn/" ;
	
	// Image uploading folder.
	$target_dir = "uploads";
	
	// Generating random image name each time so image name will not be same .
	$target_dir = $target_dir . "/" .rand() . "_" . time() . ".jpeg";
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_dir)){
		
		$MESSAGE = "Image Uploaded Successfully." ;
		echo json_encode($MESSAGE);
	}
?>