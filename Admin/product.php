<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/bootstrap-table.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Online Laptop Store - Administrator</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>BKACAD </span>Shop</a>
                <ul class="user-menu">
                    <li class="dropdown pull-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user">
                                <use xlink:href="#stroked-male-user"></use>
                            </svg> Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><svg class="glyph stroked male-user">
                                        <use xlink:href="#stroked-male-user"></use>
                                    </svg> Profile</a></li>
                            <li><a href="../index.php"><svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

        </div><!-- /.container-fluid -->
    </nav>

    <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
        <form role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
            </div>
        </form>
        <ul class="nav menu">
            <li><a href="admin.php"><svg class="glyph stroked dashboard-dial">
                        <use xlink:href="#stroked-dashboard-dial"></use>
                    </svg> Dashboard</a></li>
            <li><a href="user.php"><svg class="glyph stroked male user ">
                        <use xlink:href="#stroked-male-user" />
                    </svg>User Management</a></li>
            <li><a href="category.php"><svg class="glyph stroked open folder">
                        <use xlink:href="#stroked-open-folder" />
                    </svg>Category Management</a></li>
            <li class="active"><a href="product.php"><svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>Product Management</a></li>
            <!-- <li><a href="#"><svg class="glyph stroked two messages">
                        <use xlink:href="#stroked-two-messages" />
                    </svg> Commends Management</a></li>
            <li><a href="#"><svg class="glyph stroked chain">
                        <use xlink:href="#stroked-chain" />
                    </svg> Ads Management</a></li>
            <li><a href="#"><svg class="glyph stroked gear">
                        <use xlink:href="#stroked-gear" />
                    </svg> Settings</a></li> -->
        </ul>

    </div>
    <!--/.sidebar-->

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active">Product List</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product List</h1>
            </div>
        </div>
        <!--/.row-->
        <div id="toolbar" class="btn-group">
            <a href="add_product.php" class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i> Add Product
            </a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table data-toolbar="#toolbar" class="table" data-toggle="table">
                            <thead>
                                <tr>
                                    <th data-field="id" data-sortable="true">ID</th>
                                    <th data-field="name" data-sortable="true">Product Name</th>
                                    <th data-field="price" data-sortable="true">Price</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Category</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!-- <td>
                                        prd_id
                                    </td>
                                    <td>
                                        prd_name
                                    </td>
                                    <td>
                                        prd_price
                                    </td> -->
                                    <!-- <td style="text-align: center" id="product-img"><img width="90" height="120"
                                            src="../images/New Product Images/"></td>
                                    <td>

                                    </td>
                                    <td>
                                        cat_id
                                    </td> -->
                                    <td class="form-group">
                                        <a href="edit_product.php?prd_id=<?php echo $product['prd_id']; ?>"
                                            class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i></a>
                                        <a onclick="return confirmDelete()"
                                            href="del_product.php?prd_id=<?php echo $product['prd_id']; ?>"
                                            class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
    <!--/.main-->

    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-table.js"></script>
    <!-- <script>
        function confirmDelete(){
        return confirm("This product is going to be delete and cannot be undone. Are you sure to proceed ?");
        }
        </script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>