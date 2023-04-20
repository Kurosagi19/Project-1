<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Cart</title>
    <link rel="stylesheet" href="../../CSS/bootstrap.css">
    <link rel="stylesheet" href="../../CSS/home.css">
    <link rel="stylesheet" href="../../CSS/cart.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
<div class="bg-dark">
    <!--	Header	-->
<!-- <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#ff9933">
  <div class="container-fluid">
  <a class="navbar-brand" href="index.php"><span class="text-info" style="color: black">ThanhVu Laptop Store</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <div id="cart" class="col-lg-3 col-md-3 col-sm-12">
                    <a class="mt-4 mr-2" href="#">giỏ hàng
                        <i class="fa-solid fa-cart-shopping cart-icon">
                        <span class="mt-3">8</span></i>
                    </a>
                </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> -->
    <!--	End Header	-->

    <!--	Body	-->
    <div id="body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <nav>
                        <div id="menu" class="collapse navbar-collapse">
                            <ul>
                                <?php
                                foreach($arr['category'] as $item) {
                                ?>
                                <li class="menu-item"><a href="#"><?= $item['catname'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
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
                                <img width="900" height="250" src="images/slide/asus.jpg" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img width="900" height="250" src="images/slide/acer.jpg" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img width="900" height="250" src="images/slide/dell.png" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img width="900" height="250" src="images/slide/mac.jpg" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img width="900" height="250" src="images/slide/lenovo.jpg" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img width="900" height="250" src="images/slide/redmi.jpg" alt="...">
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

                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                            <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                        </div>
                        <form method="post">
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/product-1.png">
                                    <h4>iPhone Xs Max 2 Sim - 256GB Gold</h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/product-2.png">
                                    <h4>iPhone Xs Max 2 Sim - 256GB Gold</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/product-3.png">
                                    <h4>iPhone Xs Max 2 Sim - 256GB Gold</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/product-4.png">
                                    <h4>iPhone Xs Max 2 Sim - 256GB Gold</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <img src="images/product/product-5.png">
                                    <h4>iPhone Xs Max 2 Sim - 256GB Gold</h4>
                                </div>
                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" class="form-control form-blue quantity" value="1"
                                        min="1">
                                </div>

                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>32.990.000đ</b><a
                                        href="#"><i class="fa-solid fa-circle-xmark"></i></a></div>
                            </div>

                            <div class="row">
                                <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                    <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật
                                        giỏ hàng</button>
                                </div>
                                <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>88.970.000đ</b></div>
                            </div>
                        </form>

                    </div>
                    <!--	End Cart	-->

                    <!--	Customer Info	-->
                    <div id="customer">
                        <form method="post">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name"
                                        class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone"
                                        class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                    <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control"
                                        required>
                                </div>
                                <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text"
                                        name="add" class="form-control" required>
                                </div>

                            </div>
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Mua ngay</b>
                                    <span>Giao hàng tận nơi siêu tốc</span>
                                </a>
                            </div>
                            <div class="by-now col-lg-6 col-md-6 col-sm-12">
                                <a href="#">
                                    <b>Trả góp Online</b>
                                    <span>Vui lòng call (+84) 03.95.95.4444</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--	End Customer Info	-->

                </div>

                <div id="sidebar" class="col-lg-4 col-md-12 col-sm-12">
                    <div id="banner">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/acer.jpg"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/asus.jpg"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/dell.png"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/lenovo.jpg"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/mac.jpg"></a>
                        </div>
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="images/banner/redmi.jpg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--	End Body	-->
</body>

</html>