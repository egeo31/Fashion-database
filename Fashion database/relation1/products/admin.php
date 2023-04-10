<?php 
include "style.css";
include "config.php";

?>

<form action="delete.php" method="POST">
<select name="Product_id">

<?php

$sql_command = "SELECT Product_id, Product_name, Product_brand, Product_type, Product_price FROM products";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Product_id = $id_rows['Product_id'];
        $Product_name = $id_rows['Product_name'];
        $Product_brand = $id_rows['Product_brand'];
        $Product_type = $id_rows['Product_type'];
        $Product_price = $id_rows['Product_price'];
        echo "<option value=$Product_id>". $Product_name . " - " . $Product_brand .  " - " . $Product_type . " - " . $Product_price . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
