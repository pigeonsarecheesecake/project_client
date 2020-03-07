<table border = '2'>
<?php
include "connectdb.php";
$sql = "SELECT * FROM Local_worker";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // header
    echo "<tr>";
        echo "<th>" . "Cylinder ID" . "</th>";
        echo "<th>" . "Building" . "</th>";
        echo "<th>" . "Room Number" . "</th>";
        echo "<th>" . "Refrigerant Type" . "</th>";
        echo "<th>" . "Cylincer Capacity" . "</th>";
        echo "<th>" . "Date" . "</th>";
        echo "<th>" . "Technician Name" . "</th>";
        echo "<th>" . "Start Weight" . "</th>";
        echo "<th>" . "End Weight" . "</th>";
        echo "<th>" . "Comments" . "</th>";
        echo "</tr>";
    // output each row from the database
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["cylinder_ID"].  "</td>";
        echo "<td>" . $row["building"]. "</td>";
        echo "<td>" . $row["room_No"]. "</td>";
        echo "<td>" . $row["refrigerant_Type"]. "</td>";
        echo "<td>" . $row["cylinder_Capacity"]. "</td>";
        echo "<td>" . $row["date"]. "</td>";
        echo "<td>" . $row["technician_Name"]. "</td>";
        echo "<td>" . $row["start_Weight"]. "</td>";
        echo "<td>" . $row["end_Weight"]. "</td>";
        echo "<td>" . $row["Comments"]. "</td>";
        echo "</tr>";    
    }
} else {
    echo "0 results";
}


?>
</table>


<form action = "supervisor_menu.php">
  <input type="submit" value="Go Back" >
</form>

<form action="index.php">
    <input type="submit" value="Log Out" />
</form>
