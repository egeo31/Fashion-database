<?php 

include "config.php"; // Makes mysql connection
include "style copy.css";

$sql_statement = "SELECT * FROM designers";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $d_name= $row['d_name'];
    $d_gender = $row['d_gender'];
    $d_contractbrand = $row['d_contractbrand'];
    echo $d_name . " " . $d_gender . " " . $d_contractbrand . "<br>";
} 

?>
