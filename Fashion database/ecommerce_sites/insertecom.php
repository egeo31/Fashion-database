<?php 

include "config.php"; 

if (!empty($_POST['Ecom_name'])){
    $Ecom_name = $_POST['Ecom_name'];
    $ecom_domain = $_POST['ecom_domain'];
    $ecom_loc = $_POST['ecom_loc'];
    $sql_statement = "INSERT INTO ecommerce_sites(Ecom_name, ecom_domain, ecom_loc) VALUES ('$Ecom_name', '$ecom_domain', '$ecom_loc')";

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter your name.";
}

?>
