<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM product ORDER BY id DESC");
    include_once('Config/close_connect.php');
    return $query;
}
function store() {
    include_once('Config/connect.php');
    $catid = $_POST['catid'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $description = $_POST['description'];
    if(isset($_POST['featured'])) {
        $featured = 1;
    }else {
        $featured = 0;
    }
    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $sql = "INSERT INTO product (catid, name, price, quantity, description, featured, image)
            VALUES ($catid, '$name', $price, $quantity, '$description', $featured, '$image')";
    mysqli_query($connect, $sql);
    move_uploaded_file($file_tmp, 'images/'.$image);
    include_once('Config/close_connect.php');
}
function edit() {
        $id = $_GET['id'];
        include_once('Config/connect.php');
        $query = mysqli_query($connect, "SELECT * FROM product WHERE id = '$id'");
        include_once('Config/close_connect.php');
        return $query;
}
function update() {
    include_once('Config/connect.php');
        $id = $_POST['id'];
        $catid = $_POST['catid'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        if(isset($_POST['featured'])) {
            $featured = 1;
        }else {
            $featured = 0;
        }
        $arr = mysqli_fetch_array(mysqli_query($connect, "SELECT image FROM product WHERE id = '$id'"));
        if($_FILES['image']['name'] == '') {
            $image = $arr['image'];
        }else {
            $image = $_FILES['image']['name'];
            $file_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($file_tmp, 'Images/'.$image);
        }
        $sql = "UPDATE product SET 
                    catid = $catid,
                    name = '$name', 
                    price = $price, 
                    quantity = $quantity, 
                    description = '$description', 
                    featured = $featured, 
                    image = '$image'
                WHERE id = '$id'";
        mysqli_query($connect, $sql);
        include_once('Config/close_connect.php');
    }
function destroy() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM product WHERE id = '$id'");
    include_once('Config/close_connect.php');
}
switch($action) {
    case '' : $record = index(); break;
    case 'store' : store(); break;
    case 'edit' : $record = edit(); break;
    case 'update' : update(); break;
    case 'destroy' : destroy(); break;
}
?>