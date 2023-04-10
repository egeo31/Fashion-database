<?php

include "config.php";

?>

<form action="select.php" method="GET">
<select name="C_name">

<?php

$sql_command = "SELECT  Product_customer  FROM customers";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Product_customer  = $id_rows['Product_customer '];
        
        
        echo "<option value= $C_name>".  $C_name . "</option>";
    }

?>

</select>
<button>SELECT</button>
</form>

