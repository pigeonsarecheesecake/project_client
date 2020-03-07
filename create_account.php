<?php

include "connectdb.php";

$new_employee     = $_GET ["id"];
$new_password     = $_GET ["pass"];
$new_type         = $_GET ["usertype"];


$sql = "INSERT INTO login (employee_ID, password, usertype) VALUES ('$new_employee', '$new_password','$new_type' )";
$result = $mysqli->query($sql);



?>

<form>
  <input type="button" value="Go Back" onclick="history.back()">
</form>

<form action="index.php">
    <input type="submit" value="Log Out" />
</form>