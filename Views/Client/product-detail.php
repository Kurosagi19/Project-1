<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Product</title>
    <link rel="stylesheet" href="../../CSS/bootstrap.css">
    <link rel="stylesheet" href="../../CSS/home.css">
    <link rel="stylesheet" href="../../CSS/product.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
</head>

<body>
<div class="bg-dark">
    <!--	Header	-->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#ff9933">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"><span class="text-info" style="color: black">ThanhVu Laptop Store</span></a>
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
                                foreach($record as $item) {
                                ?>
                                <li class="menu-item"><a href="#"><?= $item['catname']; ?></a></li>
                                <?php } ?>
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

                    <!--	List Product	-->
                    <div id="product">
                        <div id="product-head" class="row">
                            <div id="product-img" class="col-lg-6 col-md-6 col-sm-12">
                                <img src="images/product/product-1.png">
                            </div>
                            <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                                <h1><?php echo $productDetail['prd_name']; ?></h1>
                                <ul>
                                    <li><span>Bảo hành:</span><?php echo $productDetail['prd_warranty']; ?></li>
                                    <li><span>Đi kèm:</span><?php echo $productDetail['prd_accessories'] ?></li>
                                    <li><span>Tình trạng:</span><?php echo $productDetail['prd_new'] ?></li>
                                    <li><span>Khuyến Mại:</span><?php echo $productDetail['prd_promotion'] ?></li>
                                    <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                                    <li id="price-number"><?php echo number_format($productDetail['prd_price'],0,'.',',') ?></li>
                                    <li id="status">
                                        <?php
                                            if($productDetail['prd_status'] == 1){
                                                echo "Còn hàng";
                                            }else{
                                                echo "Hết hàng";
                                            }
                                        ?>
                                    </li>
                                </ul>
                                <div id="add-cart"><a href="cart.php">Mua ngay</a></div>
                            </div>
                        </div>
                        <div id="product-body" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3>Đánh giá về <?php echo $productDetail['prd_name']; ?></h3>
                                <?php echo $productDetail['prd_details'] ?>
                            </div>
                        </div>

                        <!--	Comment	-->
                        <div id="comment" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3>Bình luận sản phẩm</h3>
                                <form method="post">
                                    <div class="form-group">
                                        <label>Tên:</label>
                                        <input name="comm_name" required type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input name="comm_mail" required type="email" class="form-control" id="pwd">
                                    </div>
                                    <div class="form-group">
                                        <label>Nội dung:</label>
                                        <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                                    </div>
                                    <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
                                </form>
                            </div>
                        </div>
                        <!--	End Comment	-->

                        <!--	Comments List	-->
                        <div id="comments-list" class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Văn A</b></li>
                                        <li>2018-01-03 20:40:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Văn A</b></li>
                                        <li>2018-01-03 20:40:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Văn A</b></li>
                                        <li>2018-01-03 20:40:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Văn A</b></li>
                                        <li>2018-01-03 20:40:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="comment-item">
                                    <ul>
                                        <li><b>Nguyễn Văn A</b></li>
                                        <li>2018-01-03 20:40:10</li>
                                        <li>
                                            <p>Kiểu dáng đẹp, cảm ứng rất nhạy, cầm trên tay cảm giác không bị cấn. Chụp
                                                ảnh tương đối nét, chơi game rất phê. Nếu giá mềm một chút thì sẽ bán
                                                khá chạy. Một sản phẩm tốt mà mọi người có thể cân nhắc.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--	End Comments List	-->
                    </div>
                    <!--	End Product	-->
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
    <!--	End Body	-->
</body>

</html>