<?php

include "config.php";

if(!empty($_POST['C_id']))
{
    $C_id = $_POST['C_id'];
    $sql_statement = "DELETE FROM customers WHERE C_id = $C_id";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
