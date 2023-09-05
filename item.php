<?php include'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item</title>
    <link rel="stylesheet" href="css1.css">
    <style> ul{list-style-type: none;}</style>
</head>


<body>
<?php
$Nom="Apprendre ou à laisser";
$Prix=25;
$Photo="https://journals.openedition.org/ree/docannexe/file/8419/couverture_houssaye.png"
?>  
Affichage
<?php include 'catalog-with-keys.php'; ?>
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
    <p> <?php echo $HistoireDuLatex["Prix"];?><p>
    
    </div>
    
</div>

<?php include 'simple-catalog.php';
    
?>



</body>


</html>
<?php include('footer.php');?>