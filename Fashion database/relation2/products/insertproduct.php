<?php 
include "style.css";
include "config.php"; 

if (!empty($_POST['Product_name'])){
    $Product_id = $_POST['Product_id'];
    $Product_name = $_POST['Product_name'];
    $Product_brand = $_POST['Product_brand'];
    $Product_type = $_POST['Product_type'];
    $Product_price = $_POST['Product_price'];
    $sql_statement = "INSERT INTO products(Product_id, Product_name,Product_brand,Product_type,Product_price) VALUES ('$Product_id', '$Product_name', '$Product_brand', '$Product_type', '$Product_price')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
