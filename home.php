<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<script src="https://kit.fontawesome.com/71f19cf5a0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/home.css">
<title>Home</title>
</head>
<body>

<!--	Header	-->
<div id="header">
	<div class="container">
    	<div class="row">
            	<h1><a class="navbar-brand" href="" style="color:aqua">ONLINE LAPTOP STORE</a></h1>
            <div id="search" class="col-lg-6 col-md-6 col-sm-12">
            <nav>
            <div id="menu" class="collapse navbar-collapse">
                <ul>

                </ul>
            </div>
            </nav>
                <form class="form-inline">
                    <input class="form-control mt-3" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-danger mt-3" type="submit">Search</button>
                </form>
            </div>
            <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
            	<a class="mt-4 mr-2" href="#">Cart
                    <i class="fa-solid fa-cart-shopping cart-icon">
                    <span class="mt-3">0</span></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse" data-target="#menu">
    	<span class="navbar-toggler-icon"></span>
    </button>
</div>
<!--	End Header	-->

<!--	Body	-->
<div id="body">
	<div class="container">
        <div class="row">
        	<div id="main" class="col-lg-8 col-md-12 col-sm-12">
            	<!--	Slider	-->
                <div id="slide" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#slide" data-slide-to="0" class="active"></li>
                    <li data-target="#slide" data-slide-to="1"></li>
                    <li data-target="#slide" data-slide-to="2"></li>
                    <li data-target="#slide" data-slide-to="3"></li>
                    <li data-target="#slide" data-slide-to="4"></li>
                    <li data-target="#slide" data-slide-to="5"></li>
                  </ul>
                
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
                     <div class="carousel-item">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
                     <div class="carousel-item">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
                     <div class="carousel-item">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
					<div class="carousel-item">
                      <img src="Images/Carousel 1.jpg" alt="">
                    </div>
                  </div>
                
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#slide" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#slide" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                
                </div>
                <!--	End Slider	-->
                
                <!--	Feature Product	-->
                <div class="products">
                    <h3>Featured Product</h3>
                    <div class="product-list row">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="product_image">
                        <div class="card-body">
                            <h5 class="card-title">Product name</h5>
                            <p class="card-text">Product description.</p>
                            <a href="#" class="btn btn-primary">Product detail</a>
                        </div>
                    </div>
                    </div>
                </div>
                <!--	End Feature Product	-->
                
                <!--	Latest Product	-->

                <div class="products">
                    <h3>New Product</h3>
                    <div class="product-list row">
                    <div class="card" style="width: 18rem;">
                        <img src="" class="card-img-top" alt="product_image">
                        <div class="card-body">
                            <h5 class="card-title">Product name</h5>
                            <p class="card-text">Product description.</p>
                            <a href="#" class="btn btn-primary">Product detail</a>
                        </div>
                    </div>
                    </div>
                </div>
                <!--	End Latest Product	-->

                
            </div>
            
            <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
            	<div id="banner">
                	<div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="Images/Carousel 1.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="Images/Carousel 1.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="Images/Carousel 1.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="Images/Carousel 1.jpg"></a>
                    </div>
                    <div class="banner-item">
                    	<a href="#"><img class="img-fluid" src="Images/Carousel 1.jpg"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->


<!--	Footer	-->
<div id="footer-bottom">
	<div class="container text-center">
    	<div class="row">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            	<p>
                    <!-- 2023 © <a href="https://bkacad.edu.vn">BKACAD</a>. All rights reserved. Developed by <a href="">To Lan Thanh.</a> -->
                    This Website is still in development.
                </p>
            </div>
        </div>
    </div>
</div>
<!--	End Footer	-->
</body>
</html>
