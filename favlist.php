<?php
session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$sqlconnection = mysql_connect($hostname ,$username,$password) or die("Could not open connection to database");
	//echo "hihi";
	//name($_SESSION["drugusername"]);
		$sName=$_SESSION["drugusername"];		//$cPage=$_SESSION["currentpage"];
		//echo $sName;
		$sPage=$_POST['currentlink'];
		//$pass=$_POST['pass'];
		//echo $sPage;				
$method=$_SERVER["REQUEST_METHOD"];
	



switch ($method) {
	
	case POST;
	
	mysql_select_db("mobile_web", $sqlconnection) or die ("Could not select database");
	
	
	//$result= mysql_query("SELECT * FROM members WHERE username = '$sName'");
	
	$result= mysql_query("INSERT INTO favlist(userid, link) VALUES ('$sName','$sPage')") or die ("Could not do the MySQL Query");
	
	//INSERT INTO favlist(userid, link) VALUES ('sin', 'qwe.html')
	
	
	//if($result2!=0){
	//$result= mysql_query("UPDATE members set userPassword = '$password2' WHERE userName='$sName'");
	//}
	//$query = "UPDATE members set userPassword = $pass where userName=$sName";
	//$result = mysqli_query($sqlconnention, $query);
	//echo "success";
	echo $result;
	
	break;
	
	
	case "DELETE":
 $obj = json_decode(file_get_contents('php://input'));
$link = $obj->link;
$user = $_SESSION['drugusername'];
echo $link;

mysql_select_db("mobile_web", $sqlconnection) or die("Could not select database");
$result = mysql_query("delete from favlist where link='$link' and userid='$user'") or die("Could not issue MySQL query");


echo $result;
break;

}


	
