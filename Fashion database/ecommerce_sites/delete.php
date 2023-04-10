<?php

include "config.php";
include "style copy.css";

if(!empty($_POST['Ecom_name']))
{
    $Ecom_name = $_POST['Ecom_name'];
    $sql_statement = "DELETE FROM ecommerce_sites WHERE Ecom_name=$Ecom_name";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
