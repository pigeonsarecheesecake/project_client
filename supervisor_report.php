<html>

<head>
    
    
    

</head>

<body>
<h2>Supervisor</h2>
<hr>   
    
<?php
//connect to database
include "connectdb.php";
?>
<!--form -->
<form action = "report.php">
    Cylinder ID<br>
    <input type="text"  name="cylinder_id"><br>
    
    Building<br>
    <input type="text"  name="building"><br>
    
    Room Number<br>
    <input type="text"  name="room_no"><br>
    
    Refrigerant Type<br>
    <input type="text"  name="refrigerant_type"><br>
    
    Cylinder Capacity<br>
    <input type="text"  name="cylinder_capacity"><br>
    
    Date<br>
    <input type="text"  name="date"><br>
    
    Supervisor Name<br>
    <input type="text"  name="technician_name"><br>
    
    Starting Weight (lbs)<br>
    <input type="text"  name="start_weight"><br>
    
    Add Weight(lbs)<br>
    <input type="text"  name="add"><br>
    
    Remove Weight(lbs)<br>
    <input type="text"  name="remove"><br>
    
    Comments<br>
    <input type="text"  name="comment"><br>
    
    <input type="submit" value="Submit">
</form>
    
<form action="index.php">
    <input type="submit" value="Log Out" />
</form>

    
</body>


</html>