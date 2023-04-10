<?php 

include "config.php";
include "style copy.css";

?>

<form action="delete.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT d_name, d_gender, d_contractbrand FROM designers";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $d_name = $id_rows['d_name'];
        $d_gender = $id_rows['d_gender'];
        $d_contractbrand = $id_rows['d_contractbrand'];
        echo "<option value=$d_contractbrand>". $d_name . " - " . $d_gender . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>
