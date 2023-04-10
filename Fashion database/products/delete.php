<?php
include "style.css";
include "config.php";

if(!empty($_POST['Product_id']))
{
    $Product_id = $_POST['Product_id'];
    $sql_statement = "DELETE FROM products WHERE Product_id = $Product_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
