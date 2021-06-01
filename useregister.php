
<?php
 
// Importing DBConfig.php file.
require_once __DIR__ .'/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->test2021;
$tbl = $db->table2021 ;
 
// Getting the received JSON into $json variable.
$json = file_get_contents('php://input');
 
// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);
 
 // Populate User name from JSON $obj array and store into $name.
$name = $obj['name'];
 
// Populate Password from JSON $obj array and store into $password.
$password = $obj['password'];
 
if($name){
 // Creating SQL query and insert the record into MySQL database table.
$tbl ->insertOne(["name" => $name , "password" => $password]);
 
 

 
 // If the record inserted successfully then show the message.
$MSG = 'User Registered Successfully' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);
 
// Echo the message.
 echo $json ;
}
else{
$MSG = 'Please Enter Email' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);
 
// Echo the message.
 echo $json ;

}
/* if (isset($_POST)) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $insert = "INSERT INTO user (name,email, password) ";
    $insert .= "VALUES('{$name}',   '{$email}', '{$password}')";
    $insertQuery = mysqli_query($conn, $insert);

    if ($insertQuery) {
        $ret['message'] = "Registered Successfully";
    } else {
        $ret['message'] = "Something worng";
    }
    echo json_encode($ret);
}*/
?>
