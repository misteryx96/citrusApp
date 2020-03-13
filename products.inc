<?php
$query = "SELECT * FROM products";
$products = $GLOBALS['conn']->query($query);

foreach($products as $product){
    echo '
            <div class="col-sm-4 animate-box">
                <div class="price-box animate-box">
                    <h3><b>'.$product['title'].'</b></h3>
                    <h2 class="text-org"><b>$'.$product['price'].'</b></h2>
                    <div class="gr-line"></div>
                    <img src="'.$product['image'].'"/>
                    <br>
                    <a class="btn btn-banner" href="product_single.php?id='.$product["id"].'">DETAILS</a>
                </div>
            </div>
        ';
}