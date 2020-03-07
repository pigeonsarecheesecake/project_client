<?php

include "connectdb.php";

$newcylinderid     = $_GET ["cylinder_id"];
$newbuilding       = $_GET ["building"];
$newroom_number    = $_GET ["room_no"];
$newref_type       = $_GET ["refrigerant_type"];
$newcylinder_capac = $_GET ["cylinder_capacity"];
$newdate           = $_GET ["date"];
$newtech_name      = $_GET ["technician_name"];
$newstart_weight   = $_GET ["start_weight"];
$newadd_weight     = $_GET ["add"];
$newremove_weight  = $_GET ["remove"];
$newcomment        = $_GET ["comment"];

$sql = "INSERT INTO Local_worker (cylinder_ID, building, room_No, refrigerant_Type, cylinder_Capacity, date, technician_Name, start_Weight, add_Weight, remove_Weight, Comments) VALUES ('$newcylinderid','$newbuilding','$newroom_number', '$newref_type', '$newcylinder_capac', '$newdate', '$newtech_name', '$newstart_weight', '$newadd_weight', '$newremove_weight', '$newcomment' )";
$result = $mysqli->query($sql);



?>

<form>
  <input type="button" value="Report More" onclick="history.back()">
</form>

<form action="index.php">
    <input type="submit" value="Log Out" />
</form>