<?php
// login datebase
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

$method=$_SERVER["REQUEST_METHOD"];


	    
	    $username=$_POST['usid'];
	    $pwd=$_POST['pwid'];
		$email=$_POST['elid'];
     	    mysql_select_db("mobile_web", $connection) or die("Could not select database");
			$result = mysql_query("INSERT INTO members(username,userpassword, emailaddress) VALUES ('$username','$pwd','$email')") or die("Could not issue MySQL query");
			echo $result;

?>