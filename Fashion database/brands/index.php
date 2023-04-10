<?php

include "config.php"; // Makes mysql connection
include "style.css";

$sql_statement = "SELECT * FROM brands";

$result = mysqli_query($db, $sql_statement); // Executing query

while($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $Brand_name = $row['Brand_name'];
    $Brand_loc = $row['Brand_loc'];
    $Brand_countries = $row['Brand_countries'];
   
    echo "Brand name:  ".$Brand_name. " Brand location:     " .$Brand_loc . " Brand countries:   " . $Brand_countries  . "<br>";
}

?>
<div class="img-container" >
                <img src="./imgs/mydog.webp" alt="Dog Picture"/>
                
</div>
