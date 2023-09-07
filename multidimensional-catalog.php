<?php
include ("header.php");

$Library=[
    "ApprendrePhp"=>["name"=>"Apprendre le Php", "price" =>"30", "weight"=>20, "discount"=>50, "picture_url"=>"https://www.label-emmaus.co/media/ext/540x540/d1kvfoyrif6wzg.cloudfront.net/assets/images/56/8130/none_44409bd39161b5e953727549a4cf6599_44409bd.JPEG" ],
    "Bodybuilding"=>["name"=>"Sculpter ses biscotos", "price"=>"15", "weight"=>"107", "discount"=>"null", "picture_url"=>"https://m.media-amazon.com/images/I/71F2SxgwJoL._AC_UF894,1000_QL80_.jpg"],
    "Myopie"=>["titre flou"=>"Comment soigner ma myopie ?", "prix incertain"=>"15", "poids approximatif"=>"187", "soldes(???)"=>"null", "suite de caractères incompréhensible"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQr4YHiDUTIXUxb0Lo5pxm7hfgzIfGNpWPMYA&usqp=CAU"]
]
?>
<div class="testzone">
    <div class="item1">


    <img src="<?php echo $Library ["ApprendrePhp"] ["picture_url"] ?>">

?>

    </div>

    <img src="<?php echo $Library ["Bodybuilding"] ["picture_url"] ?>">"

    <div class="item2">


    </div>

    <img src="<?php echo $Library ["Myopie"] ["suite de caractères incompréhensible"] ?>">

    <div class="item3">


    </div>

?>