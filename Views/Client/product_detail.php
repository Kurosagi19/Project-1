<!-- Product Detail-->
<?php
foreach($arr['product'] as $item) {
?>
<div id="product">
    <div id="product-head" class="row">
        <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
            <img width="500" height="350" src="images/<?= $item['image'] ?>">
        </div>
        <div id="product-details" class="col-lg-6 col-md-6 col-sm-12" style="color: white">
            <h1><?= $item['name'] ?></h1>
            <ul>
                <li id="price">Price (VAT not included): <?= number_format($item['price']); ?> VND</li>
                <?php
                if($item['quantity'] == 0) {
                    echo '<li class="text-danger">Out of Stock</li>';
                }else {
                    echo '<li id="status">Stocking</li>';
                }
                ?>
                
            </ul>
            <div id="add-cart"><button class="btn btn-outline-success"><a href="index.php?redirect=cart&action=add&id=<?= $item['id'] ?>">Add to cart</a></div>
        </div>
    </div>
    <div id="product-body" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12" style="color: white">
            <h3>Description about <?= $item['name'] ?></h3>
            <p style="color: white">
            <?= $item['description'] ?>
            </p>
        </div>
    </div>
</div>
<?php } ?>
<!-- End Product Detail-->