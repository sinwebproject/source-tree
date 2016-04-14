<?php
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
$method=$_SERVER["REQUEST_METHOD"];
	



switch ($method) {
	case "POST":


$cm=$_POST["cm"];
$name=$_POST["name"];

mysql_select_db("mobile_web", $connection) or die("Could not select database");
$result = mysql_query("insert into comm(userid, comments) values ('$name', '$cm')") or die("Could not issue MySQL query");


echo $result;
break;

case "DELETE":
 $obj = json_decode(file_get_contents('php://input'));
$cmid = $obj->id;

mysql_select_db("mobile_web", $connection) or die("Could not select database");
$result = mysql_query("delete from comm where cmid='$cmid'") or die("Could not issue MySQL query");


echo $result;
break;


}

?>