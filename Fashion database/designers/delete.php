<?php

include "config.php";
include "style copy.css";

if(!empty($_POST['d_name']))
{
    $bid = $_POST['ids'];
    $sql_statement = "DELETE FROM designers WHERE d_name = $d_name";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
