<?php

include 'connect.php';
// $servername = "localhost";
// $username = "pma";
// $password = "actscdac";
// $dbname = "b4awp";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 $sql = "CREATE DATABASE DB";

// $

//  if ($conn->query($sql) == "TRUE") {
//      echo "Database creation successful!!!";
//  }
// else {
//     echo "Database creation failed!!!";
// }

// $sql = "CREATE TABLE emps (empid int(5) primary key auto_increment,
//                             empname varchar(20) ,
//                             sal int(7))";

//  $sql = "INSERT INTO emps values(default,'raju',65000)";

//                     if ($conn->query($sql) == "TRUE") {
//                              echo "Record insertion successful!!!";
//                          }
//                          else {
//                              die("Record insertion failed!!!");
//                          } 
//                          $conn->close();       

$sql = "SELECT * FROM emps";

$result = $conn->query($sql);



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
     var btnsend=document.getElementById();
     btnsend.onclick()
     {

     }
    </script>
</head>
<body>
  <?php
        $i=1;
        echo '<table class="table">';
        echo'<thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">EmployeeID</th>
          <th scope="col">EmployeeName</th>
          <th scope="col">Salary</th>
        </tr>
      </thead><tbody>';
       if ($result->num_rows>0) {
        while ($a = $result->fetch_assoc()) {
            echo '<tr><th scope="row">'.$i++.'</th><td>'.$a["empid"].'</td><td>'.$a["empname"].'<td>'.$a["sal"].'</td></tr>';
        }
        echo '</tbody></table>';
    }
        ?>

    
<button type="button" class="btn btn-secondary active" data-toggle="modal" data-target="#addModal">ADD EMPLOYEE</button>
<button type="button" class="btn btn-secondary active" data-toggle="modal" data-target="#removeModal">REMOVE EMPLOYEE</button>
<button type="button" class="btn btn-secondary active" data-toggle="modal" data-target="#updateModal" >UPDATE DETAILS</button>


<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="addDetails.php" method="post">
     
    <div class="form-group">
        <label for="inputEmpName">Employee Name</label>
        <input type="text" class="form-control" name="empname">
    </div>
    <div class="form-group">
    <label for="inputSal">Salary</label>
    <input type="number" class="form-control" name="sal" aria-describedby="salHelp">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit"  class="btn btn-primary" value="Add Employee details"></input>
      </div>
      
    </form>
    </div>
  </div>
</div>



<div class="modal fade" id="removeModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Remove Existing Employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="removeDetails.php" method="post">
      
     <div class="form-group">
    <label for="inputEmpID">Employee ID</label>
    <input type="number" class="form-control" name="empid" aria-describedby="empIDHelp">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Remove Employee details"></button>

      </div>
      
    </form>
    </div>
  </div>
</div>


<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Employee Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      <form action="updateDetails.php" method="post">
     <div class="form-group">
    <label for="inputEmpID">Employee ID</label>
    <input type="number" class="form-control" name="empid" aria-describedby="empIDHelp">
    </div>
    <div class="form-group">
        <label for="inputEmpName">Employee Name</label>
        <input type="text" class="form-control" name="empname">
    </div>
    <div class="form-group">
    <label for="inputSal">Salary</label>
    <input type="number" class="form-control" name="sal" aria-describedby="salHelp">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" value="Update Employee details"></input>
      </div>
      
    </form>
    </div>
  </div>
</div>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>