<?php
 
// Importing DBConfig.php file.
include 'db.php';
 
// Creating connection.
 $con = mysqli_connect($servername,$username,$password,$dbname,"3340");
 
 // Getting the received JSON into $json variable.
 $json = file_get_contents('php://input');
 
 // decoding the received JSON and store into $obj variable.
 $obj = json_decode($json,true);
 
// Populate User email from JSON $obj array and store into $email.
$email = $obj['email'];
 
// Populate Password from JSON $obj array and store into $password.
$password = $obj['password'];
$Sql_Query = "select * from user where email = '$email' and SUBSTRING(password,8,length(password)-11) = '$password' ";
// Executing SQL Query.
$check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
if ($email){
if(isset($check)){
 
 $SuccessLoginMsg = 'Data Matched';
 
 // Converting the message into JSON format.
$SuccessLoginJson = json_encode($SuccessLoginMsg);
 
// Echo the message.
 echo $SuccessLoginJson ; 
 
 }
 
 else{
 
 // If the record inserted successfully then show the message.
$InvalidMSG = 'Invalid Username or Password Please Try Again' ;
 
// Converting the message into JSON format.
$InvalidMSGJSon = json_encode($InvalidMSG);
 
// Echo the message.
 echo $InvalidMSGJSon ;
 
 }
}
else{
$MSG = 'Please Enter Email' ;
 
// Converting the message into JSON format.
$json = json_encode($MSG);
 
// Echo the message.
 echo $json ;

}
 mysqli_close($con);
?>