<?php
include "service/my-functions.php";

try {
$mysqlConnection = new PDO(

    'mysql:host=localhost;dbname=adilgmysql;charset=utf8',

    'AdilGMySql',

    'PasswordAdil_45'

);
}

catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$sqlQuery = 'SELECT * FROM products';
$recupTable = $mysqlConnection->prepare($sqlQuery);
$recupTable->execute();
$products_s=$recupTable->fetchAll();
?>

<div class="table_names"><?php
foreach ($products_s as $product) {
    // var_dump($product["name"]). "<br>";
   echo "PRODUCT NAME : " . $product["name"] . "  PRICE :         " . $product["price"] . "     QUANTITY :       " . 
   $product["quantity"] . "<br>";
}
?>
</div>

<?php
$sqlQuery = 'SELECT * FROM customers';
$recupCustomers= $mysqlConnection->prepare($sqlQuery);
$recupCustomers->execute();
$customers_s=$recupCustomers->fetchAll(); ?>

<br> <h3>CUSTOMERS</h3> <br>

<?php
foreach ($customers_s as $customer){
    echo $customer["first_name"] . "  " . $customer["last_name"] . "<br>";
}
 ?>


<?php
$sqlQuery = 'UPDATE products SET  name = "A2_Titre Livre" WHERE id=2 ';
$updateProducts= $mysqlConnection->prepare($sqlQuery);
$updateProducts->execute();
$updateNameProducts = $updateProducts->fetchAll(); 

?>

<!-- Les FONCTIONS -->




