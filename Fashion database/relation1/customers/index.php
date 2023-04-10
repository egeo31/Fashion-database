<?php 

include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM customers";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $C_id = $row['C_id'];
    $C_name = $row['C_name'];
    $Product_customer = $row['Product_customer'];
    $C_gender= $row['C_gender'];
    $C_age = $row['C_age'];
    echo $C_id . " " .$C_name . "  " . $Product_customer . "  " . $C_gender. "  " . $C_age  . "<br>";
} 

?>
