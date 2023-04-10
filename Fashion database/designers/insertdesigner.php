<?php 

include "config.php";
include "style copy.css";

if (!empty($_POST['d_name'])){
    $d_name = $_POST['d_name'];
    $d_gender = $_POST['d_gender'];
    $d_contractbrand = $_POST['d_contractbrand'];
    $sql_statement = "INSERT INTO designers(d_name, d_gender, d_contractbrand) VALUES ('$d_name','$d_gender','$d_contractbrand')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
