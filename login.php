<?php

include "connectdb.php";
// set up variables from login info
$employeeID =$_POST["employee_ID"];
$password   =$_POST["pass"];


//run sql query selecting ONLY when id, password match
$sql = "SELECT * FROM login WHERE employee_ID LIKE '%".$employeeID."%' and password LIKE '%".$password."%'  ";
$result = $mysqli->query($sql);

//assign the query into an array
$row = mysqli_fetch_array($result);

//display page based on role

if ($row['employee_ID'] == $employeeID && $row['password'] == $password && $row ['usertype'] == "Employee")
{
   header("Location:local_worker.php");
   exit;

} elseif ($row['employee_ID'] == $employeeID && $row['password'] == $password && $row ['usertype'] == "Supervisor")
{
    header("Location:supervisor_menu.php");
   exit;
} elseif ($row['employee_ID'] == $employeeID && $row['password'] == $password && $row ['usertype'] == "Contractor")
{
    header("Location:contractor.php");
   exit;
} else {

    echo 'wrong pass';
    
}




?>