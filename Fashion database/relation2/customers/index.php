
<?php

include "config.php"; // Makes mysql connection
include "style.css";
$sql_statement = "SELECT * FROM customers";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $C_id = $row['C_id'];
    $C_name = $row['C_name'];
    $Product_customer = $row['Product_customer'];
    $C_gender= $row['C_gender'];
    $C_age = $row['C_age'];
    echo "Customer id:  ".$C_id ."<br>". " Customer name:  " .$C_name . " Product that customer bought:   " . $Product_customer . " Customer gender:   " . $C_gender. " Customer age:    " . $C_age  . "<br>";
} 

?>
<div class="img-container" >
                <img src="./imgs/mydog.webp" alt="Dog Picture"/>
                
</div>
            

