<?php
$products = ['молоток', 'отвертка','гвозди','саморезы','перфоратор','уровень','рулетка','краска','кисть малярная','шпатель','штукатурка','дрель','клей','линейка','пила'];
$prices = [250,180,99.9,120.5,3800,640,350.5,890.99,150.2,210,450,2700,199.99,310.75,970];

#------------------------------------------------------------------------------------------

$products2 = ['молоток', 'отвертка','гвозди','саморезы','перфоратор','уровень','рулетка','краска','кисть малярная','шпатель',];
$products2 = array_merge($products2,array_slice($products,9));
$prices2 = [250,180,99.9,120.5,3800,640,350.5,890.99,150.2,210,];
$prices2 = array_merge($prices2,array_slice($prices,9));
?>



<div class= "product-list">
    <h2>Товары и цены</h3>

    <?php for ($i = 0; $i < count($products); $i++) { ?>
        <div class = "product-card">
            <div class="product-name"><?= $products[$i]?></div>
            <div class="product-price"><?= $prices[$i]?></div>
    </div>
    <?php } ?>
</div>

<div class= "product-list">
    <h2>Товары и цены</h3>

    <?php for ($i = 0; $i < count($products2); $i++) { ?>
        <div class = "product-card">
            <div class="product-name"><?= $products2[$i]?></div>
            <div class="product-price"><?= $prices2[$i]?></div>
    </div>
    <?php } ?>
</div>