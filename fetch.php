<?php
   // connect to mongodb
   $json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
   
   require_once __DIR__ .'/vendor/autoload.php';
	$client = new MongoDB\Client('mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
	$db = $client->test2021;
	$tbl = $db->table2021 ;
	
	$filename = "uploads/app icon.png";
	if ($filename){
   $record = $tbl->find( [ 'image_path' => $filename] );  
	//foreach ($record as $employe) {  
	//echo $employe['name'], ': ', $employe['password']."<br>";}  
	echo json_encode(iterator_to_array($record));
	}
?>