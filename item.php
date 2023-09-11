<?php
 include ("multidimensional-catalog.php");
// include ("simple-catalog.php");

include("service/my-functions.php");



include("template/header.php");
?>

<h1> Librairie en ligne </h1>

<div class="container0">

        

        <?php 
       
        
        foreach ($libraries as $library) {
           
           include "template/products_template.php";
        }


            
        ?>
        



</div>





<?php include("template/footer.php"); ?>