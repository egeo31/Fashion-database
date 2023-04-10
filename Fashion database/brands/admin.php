<?php

include "config.php";
include "style.css";

?>

<form action="delete.php" method="POST">
<select name="Brand_name">

<?php

$sql_command = "SELECT  Brand_name,  Brand_loc, Brand_countries  FROM brands";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Brand_name = $id_rows['Brand_name'];
        $Brand_loc = $id_rows['Brand_loc'];
        $Brand_countries = $id_rows['Brand_countries'];
        echo "<option value=$Brand_name>". $Brand_name . " - " . $Brand_loc . " - " . $Brand_countries . "</option>";
    }

?>

</select>
<button>DELETE</button>
</form>

