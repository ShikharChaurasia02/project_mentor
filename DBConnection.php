<?php 
/* define('DB_SERVER', 'localhost:3306'); //database server url and port
 define('DB_USERNAME', 'root');  //database server username
 define('DB_PASSWORD', ''); //database server password
 define('DB_DATABASE', 'profile'); //where profile is the database 
*/  
$name=$_POST["username"];
$pwd=$_POST["password"];
 $server= "localhost";
 $user = "root";
 $pass = "";

 $db = new mysqli($server, $user, $pass, "logindetails"); 
 if($db->connect_error)
 {
 	die("error occured");
 }

 echo "connection successful";
 $sql="SELECT * from user where username='".$name."'";
 $result=$db->query($sql);
 if($result->num_rows > 0)
 {
 	while($row=$result->fetch_assoc())
 	{
 		if($row["Passsword"]==$pwd)
 		{
 			echo "welcome".$row["UserName"]."";
 			echo"Login successfull";
 		}
 	}
 }
 	else
 {
 	echo"no such user name exist";
 }
?>