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


    <!-- Boucle WHILE -->
    <div class="while">
        <h3>Boucle While - Tableau $Paint</h3>
        <p>
        <?php while ($i < 6) {
            echo $Paint[$i] . "<br>";
            $i++;
            echo formatPrice(1000);
        } ?>

        <?php print_r($Paint[0]); ?>
    </p>

    </div>


    <div class="for">
        // <!--  Boucle FOR -->
        <h3>Boucle For - Tableau $librairie</h3>
        <p>
        <!-- <?php print_r($librairie);
                // print_r ($Library); 
                ?> -->
        
        <?php for ($i = 0; $i < count($librairie); $i++) {

            echo $librairie[$i] . "<br>";
        }
        ?>
        </p>
    </div>

    <div class="foreach">

        <!-- Boucle FOREACH -->
        <h3>Boucle Foreach - $Library</h3>
        <p>
        <?php foreach ($Library as $livre => $titreLivre) : ?>
            <?php
            foreach ($titreLivre as $critère => $value)
                echo $livre . " > "  . $critère . " > " . $value . "<br>"; ?>
        <?php endforeach; ?>
        </p>
    </div>
</div>

<div class="container">



</div>

<?php include("footer.php"); ?>