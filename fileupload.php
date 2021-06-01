<?php

require_once __DIR__ .'/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->test2021;
$tbl = $db->table2021 ;


$domain_name = "http://192.168.43.144/vpn/" ;


//$name = $_POST['name'];
 
// Populate Password from JSON $obj array and store into $password.
//$password = $_POST['password'];


  if(!empty($_FILES['file_attachment']['name']))
  {
    $target_dir = "uploads/";
    if (!file_exists($target_dir))
    {
      mkdir($target_dir, 0777);
    }
    $target_file =
      $target_dir . basename($_FILES["file_attachment"]["name"]);
    $imageFileType = 
      strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if file already exists
    if (file_exists($target_file)) {
      echo json_encode($target_file);
      die();
    }
	else{
		
			
		// Printing response message on screen after successfully inserting the image .	
		echo json_encode("success");
	}
    // Check file size
  }
  
  
/*if (file_exists($target_file)) {
      echo json_encode(
         array(
           "status" => 0,
           "data" => array()
           ,"msg" => "Sorry, file already exists."
         )
      );
      die();
    }
    // Check file size
    if ($_FILES["file_attachment"]["size"] > 50000000) {
      echo json_encode(
         array(
           "status" => 0,
           "data" => array(),
           "msg" => "Sorry, your file is too large."
         )
       );
      die();
    }
    if (
      move_uploaded_file(
        $_FILES["file_attachment"]["tmp_name"], $target_file
      )
    ) {
		$target_dir = $domain_name.$target_file ;
		$tbl ->insertOne(["name" => $name , "password" => $password , "image_path" => $target_dir]);
      echo json_encode("success");
    } else {
      echo json_encode(
        array(
          "status" => 0,
          "data" => array(),
          "msg" => "Sorry, there was an error uploading your file."
        )
      );
    }*/

  
  
  
?>

