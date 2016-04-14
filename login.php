<?php
	// login datebase
	session_start();
	$hostname = "127.0.0.1";
	$username = "root";
	$password ="12345678";
	$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");
	
	$method=$_SERVER["REQUEST_METHOD"];
	//post data
	$usname=$_POST['myusername'];
	$pword=$_POST['mypassword'];
	if($usname=="" || $pword==""){
		echo "false";
	}else{
	//selecting database
	mysql_select_db("mobile_web", $connection) or die("Could not select database");
	//insert sql query to result
	$result = mysql_query("select * from members where userName='$usname'") or die("name unavailable");
	$row = mysql_fetch_array($result);
	if($row[1]==$pword){
               
               $_SESSION["drugusername"] = $usname;		   
               echo "true";               
           }else{
               echo "false";
			   $num_row=mysql_num_rows($result);
			//echo $num_row;
         }  
	}
		   



?>