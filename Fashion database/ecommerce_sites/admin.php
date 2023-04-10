<?php 

include "config.php";
include "style copy.css";

?>

<form action="delete.php" method="POST">
<select name="Ecom_name">

<?php

$sql_command = "SELECT Ecom_name, ecom_domain, ecom_loc FROM ecommerce_sites";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Ecom_name = $id_rows['Ecom_name'];
        $ecom_domain = $id_rows['ecom_domain'];
        $ecom_loc = $id_rows['ecom_loc'];
        echo "<option value=$Ecom_name>".$Ecom_name. " - " . $ecom_domain . " - " . $ecom_loc . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
