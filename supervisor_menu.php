<html>

<head>
    
</head>

<body>
<!-- -->
<!--supervisor options-->
<!-- report-->
<h2>Report</h2>
<hr>   
<form action="supervisor_report.php">
    <input type="submit" value="Report" />
</form>
<!--verify -->
<h2>Verify</h2>
<hr>   
<form action="supervisor_verify.php">
    <input type="submit" value="verify" />
</form>

<!-- create account-->
<h2>Create Account</h2>
<hr>   
<form action="" method="GET">
    <label for="employee_ID"><b>ID  :    </b></label>
    <input type="text" placeholder="Enter ID" name="id" ><br>
    
    <label for="employee_pass"><b>Password  :    </b></label>
    <input type="text" placeholder="password" name="pass" ><br>
    
    <label for="employee_ID"><b>User Type   :    </b></label>
    
    <select id="employee_ID" name="usertype" >
        <option value="Employee">Employee</option>
        <option value="Contractor">Contractor</option>
    </select>   
    <br>
    <input type="submit" value="Create Account" name="create">
    
</form>

<!-- create account on the same page -->
<?php
    if(isset($_GET['create'])){
include "connectdb.php";

$new_employee     = $_GET ["id"];
$new_password     = $_GET["pass"];
$new_type         = $_GET ["usertype"];


$sql = "INSERT INTO login (employee_ID, password, usertype) VALUES ('$new_employee', '$new_password','$new_type' )";
if ($mysqli->query($sql) === TRUE) {
	echo "<br/>"; 
    echo "User Added!";
} else {
	echo "<br/>"; // new line 
    echo "Error " . $mysqli->error;
}
    }


?>
 
<!-- view reports -->
<h2>View Reports</h2>
<hr> 
<form action="view_table.php">
    <input type="submit" value="View Table" />
</form>

    </body>

<!-- view users -->
<h2>View Users</h2>
<hr> 
<form action="view_user.php">
    <input type="submit" value="View Users" />
</form>

    
    
    
<!-- log out -->  
<form action="index.php">
    <input type="submit" value="Log Out" />
</form>
    
</html>

