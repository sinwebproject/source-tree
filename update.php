<?php
session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$sqlconnection = mysql_connect($hostname ,$username,$password) or die("Could not open connection to database");
	//echo "hihi";
	//name($_SESSION["drugusername"]);
		$sName=$_SESSION["drugusername"];
		//echo "sName";
		//$name=$_POST['name'];
		//$pass=$_POST['pass'];				
$method=$_SERVER["REQUEST_METHOD"];
	



switch ($method) {
	
	case PUT;
	parse_str(file_get_contents("php://input"),$post_vars);
	$password2=$post_vars['pass'];
	mysql_select_db("mobile_web", $sqlconnection) or die ("Could not select database");
	$result2= mysql_query("SELECT * FROM members WHERE username = '$sName'");
	if($result2!=0){
	$result= mysql_query("UPDATE members set userPassword = '$password2' WHERE userName='$sName'");
	}
	//$query = "UPDATE members set userPassword = $pass where userName=$sName";
	//$result = mysqli_query($sqlconnention, $query);
	//echo "success";
	echo "echo $result=	"+$result;
	
	break;
}
	
