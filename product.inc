<?php
$product = $GLOBALS['conn']->prepare("SELECT * FROM products WHERE id=?");
$product->execute([$id]);
$product = $product->fetch();

echo '
        <div>
            <div class="price-box animate-box">
                <h3><b>'.$product['title'].'</b></h3>
                <h2 class="text-org"><b>$'.$product['price'].'</b></h2>
                <div class="gr-line"></div>
                <img src="'.$product['image'].'"/>
                <br>
                <p>'.$product['description'].'</p>
            </div>
        </div>
    ';