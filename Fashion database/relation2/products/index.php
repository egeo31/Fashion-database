
<link rel="stylesheet" type="text/css" href="/path/to/style.css">
<?php
include "style.css";
include "config.php"; // Makes mysql connection

$sql_statement = "SELECT * FROM products";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Product_id = $row['Product_id'];
    $Product_name = $row['Product_name'];
    $Product_brand = $row['Product_brand'];
    $Product_type = $row['Product_type'];
    $Product_price = $row['Product_price'];
    echo $Product_id . " " . $Product_name . " " . $Product_brand . " " .$Product_type . " " . $Product_price . "<br>"; 
}


?>

