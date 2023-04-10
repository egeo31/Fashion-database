<?php 

include "config.php";
include "style.css";

if (!empty($_POST['C_id'])){
    $C_id = $_POST['C_id'];
    $C_name = $_POST['C_name'];
    $Product_customer = $_POST['Product_customer'];
    $C_gender = $_POST['C_gender'];
    $C_age = $_POST['C_age'];
    $sql_statement = "INSERT INTO customers(C_id, C_name,  Product_customer, C_gender, C_age) VALUES ('$C_id', '$C_name', '$Product_customer', '$C_gender,', '$C_age')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
