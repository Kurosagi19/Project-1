<?php
function index() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY id ASC");
    // $sql = "SELECT * FROM product WHERE id = '$id'";
    // $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    if(isset($_SESSION['cart'][$id])) {
        $_SESSION['cart'][$id]++;
    } else {
        $_SESSION['cart'][$id] = 1;
    }
    $arr = array();
    $arr['category'] = $cate;
    // $arr['product'] = $query;
    $arr['product'] = $_SESSION['cart'][$id];
    return $arr;
}

switch($redirect) {
    case 'cart': $arr = index(); break;
}