<?php include "navbar.html"; ?>
<link rel="stylesheet" href="style.css" />
<div class="container" >
    <div class="row">
        <div class="col-12" style="text-align: center">
            <?php
            if (isset($_POST['name'])) {

                $name = $_POST['name'];
                echo "<h1> Hello " . $name . "</h1>";
                echo "<h2> Welcome to my blog </h2>";
               
            }
            else
            {
                echo "<h1> Welcome to my blog </h1>";
            }
            ?>
            
        </div>
    </div>
    <div class="row">
        <div class="col-6 photo-container">
            <div class="wrapper-1">    
                <div class="img-container" >
                    <img src="./imgs/mycat.png" alt="Cat Picture"/>
                    
                </div>
                <h4> A photo of my cat!</h4>
            </div>    
        </div>
        <div class="col-6 photo-container">
            <div class="wrapper-2">
                <div class="img-container" >
                    <img src="./imgs/mydog.webp" alt="Dog Picture"/>
                    
                </div>
                <h4> A photo of my dog!</h4>
            </div> 
        </div>
</div>
</div>