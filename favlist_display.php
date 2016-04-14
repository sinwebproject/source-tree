<?php
session_start();
	// login datebase
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$sqlconnection = mysql_connect($hostname ,$username,$password) or die("Could not open connection to database");
	//echo "hihi";
	//name($_SESSION["drugusername"]);
		//$sName=$_SESSION["drugusername"];		//$cPage=$_SESSION["currentpage"];
		
		//$sPage=$_POST['currentlink'];
		//$pass=$_POST['pass'];
		//echo $sPage;				
$method=$_SERVER["REQUEST_METHOD"];
	



switch ($method) {
	
	case GET;
	
	mysql_select_db("mobile_web", $sqlconnection) or die ("Could not select database");
	
	
	//$result= mysql_query("SELECT * FROM members WHERE username = '$sName'");
	$user = $_SESSION['drugusername'];
	$result= mysql_query("SELECT * FROM favlist where userid='$user'");
	
	$results = array();
while($rows = mysql_fetch_array($result)){
	$row = array("username" => $rows[0],
				"link" => $rows[1]				
				);
	array_push($results, $row);
}

echo json_encode($results);
	//INSERT INTO favlist(userid, link) VALUES ('sin', 'qwe.html')
	
	
	//if($result2!=0){
	//$result= mysql_query("UPDATE members set userPassword = '$password2' WHERE userName='$sName'");
	//}
	//$query = "UPDATE members set userPassword = $pass where userName=$sName";
	//$result = mysqli_query($sqlconnention, $query);
	//echo "success";
	//echo $result;
	
	break;
}
	
