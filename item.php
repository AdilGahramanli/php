<?php
include("my-functions.php");

include("simple-catalog.php");
include("multidimensional-catalog.php");
$librairie = ["livre1", "livre2", "livre3",];
// <!-- inclure un tableau associatif simple -->
$i = 0;
include("header.php");
?>

<h1> Librairie en ligne </h1>

<div class="testzone">
    <h2>Espace de tests </h2>
    
    <!-- Boucle WHILE -->
    <h3>Boucle While - Tableau $Paint</h3>
    <?php while ($i < 6) {
        echo $Paint[$i] . "<br>";
        $i++;
        echo formatPrice(1000);
    } ?>

    <?php print_r($Paint[0]); ?>



    // <!--  Boucle FOR -->
    <h3>Boucle For - Tableau $librairie</h3>
    <!-- <?php print_r($librairie);
    // print_r ($Library); ?> -->
    
    <?php for ($i = 0; $i < count($librairie); $i++) {
    
        echo $librairie[$i]."<br>";
    }
    ?>


     <!-- Boucle FOREACH -->
     <h3>Boucle Foreach - $Library</h3>
    <?php foreach($Library as $livre => $titreLivre) : ?>
        <?php 
            foreach($titreLivre as $critère => $value)
            echo $livre . " > "  . $critère . " > " . $value . "<br>"; ?>
        <?php endforeach; ?>


</div>

<div class="container">



</div>

<?php include("footer.php"); ?>