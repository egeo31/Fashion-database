<?php 

include "config.php"; // Makes mysql connection
include "style copy.css";

$sql_statement = "SELECT * FROM ecommerce_sites";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Ecom_name = $row['Ecom_name'];
    $ecom_domain = $row['ecom_domain'];
    $ecom_loc = $row['ecom_loc'];
    echo "Site name: ".$Ecom_name. "      Sites domain: " . $ecom_domain . "     Sites location:  " . $ecom_loc . "<br>"; 
}


?>
