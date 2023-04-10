<?php 

include "config.php";
include "style.css";

if (!empty($_POST['Brand_name'])){
    $Brand_name = $_POST['Brand_name'];
    $Brand_loc = $_POST['Brand_loc'];
    $Brand_countries = $_POST['Brand_countries'];
    $sql_statement = "INSERT INTO brands(Brand_name, Brand_loc, Brand_countries) VALUES ('$Brand_name', '$Brand_loc', '$Brand_countries')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
