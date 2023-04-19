<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SSShop</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <style>
            .category_hover:hover {
                background-color: #0d6efd;
                color: white;
            }
        </style>
    </head>

    <body>
<!-- Navbar -->
<div class="bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#ff9933">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><span style="color: black">ThanhVu Laptop Store</span></a>
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
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                <a class="mt-4 mr-2" href="#">Cart
                    <i class="fa-solid fa-cart-shopping cart-icon">
                    <span class="mt-3">1</span></i>
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
                    <div class="col-lg-10 col-md-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Images/alienware.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/acer.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/rogstrix.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/MacProm2.webp" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/nitro5.jpg" class="d-block w-100" alt="...">
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

                        <!-- Product Card -->
                        <div class="products">
                            <h3>Featured</h3>
                            <div class="product-list row">
                            <?php
                            foreach($arr['product'] as $item) {
                            ?>
                                <div class="col-lg-4 col-md-6 col-sm-12 mx-product">
                                    <div class="product-item card text-center">
                                        <a href="<?php  ?>">
                                            <img src="Images/<?php  ?>">
                                        </a>
                                        <h4><a href="">Product Name:<?= $item['name'] ?></a></h4>
                                        <p>Price:<?= $item['price'] ?></p>
                                    </div>
                                </div>
                                <?php
                            }
                                ?>
                            </div>
                        </div>
                        <!-- End Product Card -->
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