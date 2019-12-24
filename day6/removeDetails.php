<?php

include 'connect.php';
$id="";

$sql="";
$id=$_POST["empid"];

$sql = "DELETE FROM emps where empid=$id";
echo $sql;
if ($conn->query($sql) == "TRUE") {
         echo "Record deletion successful!!!";
     }
     else {
         die("Record deletion failed!!!");
     } 
     $conn->close();    
     
     header("location:index.php");
?>