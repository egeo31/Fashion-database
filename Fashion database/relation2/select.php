<?php

include "config.php";

if(!empty($_GET['Product_customer ']))
{
    $Brand_name = $_GET['Product_customer ];
    $sql_statement = "SELECT * FROM products WHERE Product_id =  $Product_customer";
    $result = mysqli_query($db, $sql_statement);
    while($row = mysqli_fetch_assoc($result)) { // Iterating the result
        $Product_id = $row['Product_id'];
        $Product_name = $row['Product_name'];
        $Product_brand = $row['Product_brand'];
        $Product_type = $row['Product_type'];
        $Product_price = $row['Product_price'];
        echo $Product_id . " " . $Product_name . " " . $Product_brand . " " .$Product_type . " " . $Product_price . "<br>";
    }

}

?>

