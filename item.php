<?php include'header.php';
 include 'multidimensional-catalog.php';
 include 'simple-catalog.php';
include 'catalog-with-keys.php'; ?>


<?php
$Nom="Apprendre ou à laisser";
$Prix=25;
$Photo="https://journals.openedition.org/ree/docannexe/file/8419/couverture_houssaye.png"
?>  
Affichage

<div class="product">
    <div class="livres">
    <img class="couverture" src="<?php echo $Photo ?>" alt="couverture du livre"> 
    <h2 class="title"> "<?php echo $Nom ?>" </h2>
    Le prix est de <?php echo $Prix ?> €
    
    </div>
    <div class="livres">
    <img class="couverture" src="<?php echo $ApprendrePhp["Photo"]?>">
    <h3> <?php  echo $ApprendrePhp["Nom"];?></h3>
    <p><?php echo $ApprendrePhp["Prix"];?>€</p>
    
    </div>
    <div class="livres">
    <img class="couverture" src="<?php echo $ComprendreLaMatrice["Photo"];?>">
    <h3> <?php echo $ComprendreLaMatrice["Nom"];?></h3>
    <p> <?php echo $ComprendreLaMatrice["Prix"];?>€</p>
    
    </div>
    <div class="livres">
    <img class="couverture" src="<?php echo $HistoireDuLatex["Photo"];?>">
    <h3> <?php echo $HistoireDuLatex["Nom"];?></h3>
    <p> <?php echo $HistoireDuLatex["Prix"];?>€<p>
    
    </div>
    
</div>

 
    <div class="livres">
        <img class="couverture" src="<?php echo $products2 [0][4];?>">
        <h3> <?php echo $products2 [0][1];?></h3>
    </div>








<?php include('footer.php');?>

