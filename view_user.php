<table border = '2'>
<?php
include "connectdb.php";
$sql = "SELECT * FROM login";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // header
    echo "<tr>";
        echo "<th>" . "Employee ID" . "</th>";
        echo "<th>" . "Password" . "</th>";
        echo "<th>" . "User Type" . "</th>";
    // output each row from the database
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["employee_ID"].  "</td>";
        echo "<td>" . $row["password"]. "</td>";
        echo "<td>" . $row["usertype"]. "</td>";
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