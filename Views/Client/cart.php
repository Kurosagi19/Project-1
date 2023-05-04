<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TVS - ThanhVuLaptopStore</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/product.css">
        <link rel="stylesheet" href="css/success.css">
        <link rel="stylesheet" href="css/cart.css">
        <style>
            .category_hover:hover {
                background-color: #0d6efd;
                color: white;
            }
        </style>
    </head>

    <script>
        function buyNow() {
            document.getElementById('buy-now').submit();
        }
    </script>
    
    <body>
<!-- Navbar -->
<div class="bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#ff9933">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><span style="color: black">ThanhVu Laptop Store</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?controller=admin">Admin</a>
        </li>
      </ul>
      <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a class="mt-4 mr-2" href="?redirect=cart">Cart
                    <i class="fa-solid fa-cart-shopping cart-icon">
                    <span class="mt-3">
                    <?php
                        // Display product quantity using id
                        if(isset($_SESSION["cart"])){
                            $totals = 0;
                            foreach($arr['product'] as $prd_id=>$qtt){
                                $totals++;
                            }
                            echo $totals;
                        }
                        else{
                            echo 0;
                        }
                        ?>
                    </span></i>
                </a>
            </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- End navbar -->
<!-- Category -->
            <div class="container">
                <div class="row ">
                    <div class="col-lg-2 col-md-6">
                        <h4 class="text-white">Category</h4>
                        <div class="list-group">
                        <ul class="list-group">
                            <?php
                            foreach($arr['category'] as $item) {
                            ?>
                            <li class="list-group-item"><a href="#"><?= $item['catname'] ?></a></li>
                            <?php } ?>
                        </ul>
                        </div>
                    </div>
                    <!-- End Category -->

                    <!-- Carousel -->
                    <div class="col-lg-10 col-md-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img width="1200" height="630" src="Images/alienware.webp" class="d-100 w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img width="1200" height="630" src="Images/Carousel/ROG.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img width="1200" height="630" src="Images/Carousel/LaptopGaming.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img width="1200" height="630" src="Images/Carousel/MacPro2016.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img width="1200" height="630" src="Images/Carousel/AcerNitro5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <!-- End Carousel -->
                        <?php
                        if(isset($_SESSION['cart'])) {
                        ?>
                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Product Detail</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Option</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Price</div>
                        </div>
                        <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                            <?php
                            $total_price_all = 0;
                            foreach ($arr['product'] as $productID => $item) {
                                $total_price = $item['amount'] * $item["price"];
                                $total_price_all += $total_price; // Sum product cost in cart
                            ?>
                                <div class="cart-item row">
                                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                        <img src="images/<?= $item['image'] ?>">
                                        <h4><?= $item['name'] ?></h4>
                                    </div>

                                    <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                        <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['amount'] ?>" min="1" max="<?= $item['quantity'] ?>">
                                    </div>
                                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($item['price']); ?>VND</b><a href="?redirect=cart&action=del&id=<?= $productID ?>">Delete from Cart</a></div>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Update Cart</button>
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Total Cost:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($total_price_all); ?>VND</b></div>
                            </div>
                        </form>

                    </div>
                    <!--	End Cart	-->

                    <!--	Customer Info	-->
                    <div id="customer">
                        <form id="buy-now" method="post" action="?redirect=cart&action=checkaccess">
                            <div class="row">
                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Fullname" type="text" name="fullname" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Phone number" type="text" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email" type="text" name="email" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Address" type="text" name="address" class="form-control" required>
                                </div>
                            </div>
                        </form>
                    <!--	End Customer Info	-->

                    <!-- Buy Button -->
                    <div class="row">
                        <div class="by-now col-lg-6 col-md-6 col-sm-12">
                            <a href="#" onClick="buyNow()">
                                <b>Buy Now</b>
                            </a>
                        </div>
                    </div>
                    <!-- End Buy Button -->

                    <?php }else {
                        echo '<div class="alert alert-danger mt-3">Your cart is empty ! Get outside and add some product !</div>';
                    } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 mt-5 text-white text-center">
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js "></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/popper.min.js "></script>
        </div>
        </div>
    </body>

    </html>