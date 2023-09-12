<?php
include("template/header.php");
include ("service/my-functions.php");

$prixUnitaire = $_POST["price"];
$quantity= $_POST["quantity"];
$discount= $_POST["discount"];
$prixUnitairePromo = $_POST["discountedPrice"];
$titre = $_POST["title"]; 
$total = ($quantity*$prixUnitairePromo);
$totalHT = priceExcludingVAT($total);
$tva = $total - $totalHT;
?>
<div class="form_panier">
   

    <h3> <?php echo  "Produit <br><br>" . $titre  . "<br>"; ?> </h3>
            <p> 
                <b>prix unitaire <br></b><?php echo ($prixUnitaire) . " - " . $discount . "<br><br>"; ?>
                
            </p>

            <p>
            <?php echo "<b>Quantité </b> " . $quantity . " <br> "; ?>
            </p>

            <p>
                <?php echo "<b>Total</b> <br>" . $total; ?>
            </p>

            <p class="form_totalHT">
                <?php echo "Total HT " . formatPrice($totalHT); ?>
            </p>

            <p class="form_TVA">
                <?php echo formatPrice($tva); ?>
            </p>

            <p class="form_totalTTC">
                <?php echo formatPrice($total); ?>

            </p>


</div>

<?php include("template/footer.php");
