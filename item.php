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
$Nom="Apprendre le php en 10 leçons";
$Prix=25;
$Photo="https://ec56229aec51f1baff1d-185c3068e22352c56024573e929788ff.ssl.cf1.rackcdn.com/attachments/large/9/0/5/010955905.jpg"
?>  
Affichage
<div class="product">
    <h2 class="title"> "<?php echo $Nom ?>" </h2>
    Le prix est de <?php echo $Prix ?> €
    <img class="couverture" src="<?php echo $Photo ?>" alt="couverture du livre"> 

</div>

<?php include 'simple-catalog.php';
    
?>



</body>


</html>
<?php include('footer.php');?>