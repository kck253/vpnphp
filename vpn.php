<?php
require_once __DIR__ .'/vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://vpnapp:kamalcharankaushik@freecluster.mwhwi.mongodb.net/myFirstDatabase?retryWrites=true&w=majority');
$db = $client->test2021;
$tbl = $db->table2021 ;

$tbl ->insertOne(["Name" => "kamal charan"])

?>
