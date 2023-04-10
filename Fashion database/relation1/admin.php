<?php 

include "config.php";

?>

<form action="select.php" method="GET">
<select name="Product_id">

<?php

$sql_command = "SELECT  Product_id FROM products";

$myresult = mysqli_query($db, $sql_command);


    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Product_id = $id_rows['Product_id'];
        
        echo  "<option value= $Product_id>".  $Product_id . "</option>";
    }

?>

</select>
<button>SELECT</button>
</form>
