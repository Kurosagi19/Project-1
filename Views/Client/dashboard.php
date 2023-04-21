                        <div class="products">
                            <div class="product-list row">
                            <?php
                            foreach($arr['product'] as $item) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                    <div class="product-item card text-center">
                                        <a href="<?php  ?>">
                                            <img width="130" height="100" href="?redirect=product&id=<?= $item['id'] ?>" src="Images/<?= $item['image'] ?>">
                                        </a>
                                        <h4><a href="?redirect=product&id=<?= $item['id'] ?>">Product Name:<?= $item['name'] ?></a></h4>
                                        <p>Price:<?= number_format($item['price']) ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                                ?>
                            </div>
                        </div>