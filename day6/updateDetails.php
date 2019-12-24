<?php

include 'connect.php';
$id="";
$name="";
$sal="";
$sql="";
$name=$_POST["empname"];
$sal=$_POST["sal"];
$id=$_POST["empid"];

$sql = "UPDATE emps set empname='$name', sal=$sal where empid=$id";
echo $sql;
if ($conn->query($sql) == "TRUE") {
         echo "Record updation successful!!!";
     }
     else {
         die("Record updation failed!!!");
     } 
     $conn->close();    
     
     header("location:index.php");
?>