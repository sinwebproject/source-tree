<?php
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");



$cm=$_POST["cm"];
$name=$_POST["name"];

mysql_select_db("mobile_web", $connection) or die("Could not select database");
$result = mysql_query("SELECT * FROM comm") or die("Could not issue MySQL query");

$results = array();
while($rows = mysql_fetch_array($result)){
	$row = array("username" => $rows[0],
				"cm" => $rows[1],
				"time" => $rows[2],
				"cmid" => $rows[3]
				);
	array_push($results, $row);
}

echo json_encode($results);


?>