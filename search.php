<?php

$sql = "SELECT date, building, technician_Name, cylinder_ID FROM Local_worker";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["date"]. " - Name: " . $row["technician_Name"]. " building: " . $row["building"]. "<br>";
    }
} else {
    echo "0 results";
}

?>