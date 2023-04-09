    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TVStore</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <style>
            .category_hover:hover {
                background-color: #0d6efd;
                color: white;
            }
        </style>
    </head>

    <body>
        <div class="bg-dark">
            <nav class="navbar navbar-dark sticky-top" style="background-color:brown">
                <div class="container">
                    <a class="navbar-brand" href="#"><spand class="text-info">TV LAPTOP</spand></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </nav>

            <div class="container">
                <div class="row ">
                    <div class="col-lg-2 col-md-6">
                        <h4 class="text-white">Category</h4>
                        <div class="list-group">
                            <a href="product_cat.php?cat_id=1" class="list-group-item list-group-item-action category_hover ">Iphone</a>
                            <a href="product_cat.php?cat_id=2" class="list-group-item list-group-item-action category_hover ">Samsung</a>
                            <a href="product_cat.php?cat_id=3" class="list-group-item list-group-item-action category_hover ">Xiaomi</a>

                            <a href="# " class="list-group-item list-group-item-action category_hover ">Laptops</a>
                            <a href="# " class="list-group-item list-group-item-action category_hover ">Accessories</a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 mt-3">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Images/acer.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/dell.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/hp.jpg" class="d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="Images/macair.webp" class="d-block w-100" alt="">
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
                        <div class="row ">
                            <?php
                                if(mysqli_num_rows($queryAllProducts)){
                                while($prdInfo = mysqli_fetch_assoc($queryAllProducts)){
                            ?>
                                <div class="col-lg-3 col-md-6 mb-4 mt-3">
                                    <div class="card h-100 w-100 " style="width: 18rem; ">
                                        <a href="product-detail.php?prd_id=<?php echo number_format($prdInfo['prd_id']) ?>">
                                            <img class="card-img-top " src="<?php echo ($prdInfo['prd_img']) ?>" alt="Card image cap ">
                                        </a>
                                        <div class="card-body ">
                                            <a href="product-detail.php?prd_id=<?php echo number_format($prdInfo['prd_id']) ?>" class="text-decoration-none ">
                                                <h4 class="card-title ">
                                                    <a href="product-detail.php?prd_id=<?php echo number_format($prdInfo['prd_id']) ?>">
                                                        <?php echo($prdInfo['prd_name']) ?>
                                                    </a>
                                                </h4>
                                                <h5>
                                                    <?php
                                                        echo number_format($prdInfo['prd_price'], 0, ".", ",");
                                                        echo "VND";
                                                    ?>
                                                </h5>
                                                <p class="card-text ">
                                                    <?php echo($prdInfo['prd_info']) ?>
                                                </p>
                                            </a>
                                        </div>
                                        <div class="card-footer text-muted ">
                                            <small class="text-muted ">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3 mt-5 text-white text-center">
                Bản quyền bởi &copy; <a href="# ">TVLAPTOPSTORE</a> &copy; 2023-2024
            </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        </div>
    </body>

    </html>