<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>TVStore</title>
</head>
<body>

<!-- Navigator Bar -->
<div class="bg-dark">
<nav class="navbar navbar-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="?redirect=client"><span style="color:red">TV LAPTOP</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Featured</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?controller=admin">Login</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
    <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                    <a class="mt-4 mr-2" href="?redirect=cart">giỏ hàng</a>
                    <span class="mt-3">
                        <?php
                        // Hiển thị số lượng sản phẩm theo mã sản phẩm
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
                    </span>
                </div>
  </div>
</nav>
<!-- End Navigator Bar -->

<div class="container">
    <div class="row">
        <!-- Category -->
        <div class="col-lg-2 col-md-6">
            <h4 class="text-white">Category</h4>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">Acer</a>
                <a href="#" class="list-group-item list-group-item-action">Asus</a>
                <a href="#" class="list-group-item list-group-item-action">HP</a>
                <a href="#" class="list-group-item list-group-item-action">Dell</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Macbook</a>
            </div>
        </div>
        <!-- End Category -->

        <!-- Carousel -->
        <div class="col-lg-10 col-md-6 mt-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="Images/acer.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                    <img src="Images/nitro5.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                    <img src="Images/hp.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- End Carousel -->

        <!-- Product -->
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mt-3">
                <div class="card h-100 w-100" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">Product Name</h5>
                    <p class="card-text">Product Description</p>
                    <a href="#" class="btn btn-primary">Product Details</a>
                </div>
                </div>
            </div>
        </div>
        <!-- End Product -->
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>