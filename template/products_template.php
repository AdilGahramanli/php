<div class="item">
    <img class="imageItem" src="<?php echo $library["image"]; ?>">
    <h3><?php echo $library["title"]; ?></h3>

    <p>
        <?php echo $library["description"] ."<br>"; ?></br>
      
        <?php if ($library["availability"] == false) { 
        echo "<del>Indisponible</del>"."<br>";
        } else {
             
             echo  formatPrice($library["price"]) . " <br><br> ";
             if ($library["discount"]!== null) {
                echo "PROMOTION = " . formatPrice(discountedPrice($library["price"], $library["discount"]));
            }
        }
        ?>
    </p>
    <form method="post" action="cart.php">
        <input type="hidden" id="<?php echo $library["title"]; ?>" name="" value = "<?php echo $library["title"]; ?>"/>
    <p><label for="quantity"> Quantité : </label>
        <input type="number" id="quantity" name="quantity" min="0">
    </p>
    <p>
        <button type = submit <?php if (! $library['availability']): ?>disabled<?php endif; ?>>
            COMMANDER
            <!-- ouvre un formulaire, envoi les infos au panier -->
        </button>
    </p>

    </form>

</div>
