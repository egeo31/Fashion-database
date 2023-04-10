<?php 

include "config.php";

?>

<form action="delete.php" method="POST">
<select name="C_id">

<?php

$sql_command = "SELECT  C_id, C_name,  Product_customer, C_gender, C_age  FROM customers";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $C_id = $id_rows['C_id'];
        $C_name= $id_rows['C_name'];
        $Product_customer = $id_rows['Product_customer'];
        $C_gender = $id_rows['C_gender'];
        $C_age = $id_rows['C_age'];
        
        
        echo "<option value=$C_id>".$C_id . " - " .$C_name . " - " . $Product_customer . " - " .$C_gender . " - " .$C_age . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
