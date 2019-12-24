<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$query="SELECT * FROM `tbl_cake` WHERE 1";

$result=$conn->query($query);
if($result->NUM_ROWS>0){
    echo "Inserted";
    while($row= $result->fetch_assoc()){
        echo $row["name"]. "<br/>" . 
    }
}



?>