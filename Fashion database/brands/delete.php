<?php

include "config.php";
include "style.css";

if(!empty($_POST['Brand_name']))
{
    $Brand_name = $_POST['Brand_name'];
   $sql_statement = "DELETE FROM brands WHERE Brand_name = $Brand_name";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
