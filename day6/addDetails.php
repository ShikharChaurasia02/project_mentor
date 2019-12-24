<?php

include 'connect.php';
$name="";
$sal="";
$sql="";
$name=$_POST["empname"];
$sal=$_POST["sal"];

$sql = "INSERT INTO emps values(default,'$name',$sal)";
echo $sql;
if ($conn->query($sql) == "TRUE") {
         echo "Record insertion successful!!!";
     }
     else {
         die("Record insertion failed!!!");
     } 
     $conn->close();    
     
     header("location:index.php");
?>