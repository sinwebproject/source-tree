<?php
// login datebase
$hostname = "127.0.0.1";
$username = "root";
$password ="12345678";
$connection = mysql_connect($hostname, $username, $password) or die("Could not open connection to database");

$method=$_SERVER["REQUEST_METHOD"];

	    $search_input=$_POST['word'];
		//echo $search_word;
     	    mysql_select_db("mobile_web", $connection) or die("Could not select database");            
			$result = mysql_query("select * from search_info where sinfo like '$search_input%'") or die("error searching");
			while($row = mysql_fetch_array($result)){
				echo "<li><a href=".$row[0].".html>".$row[0]."</a></li>";
				echo $row[1];
			}
	    $num_row=mysql_num_rows($result);
	    //echo $num_row;
	   



?>