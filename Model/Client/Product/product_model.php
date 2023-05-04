<?php
function index() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY catid ASC");
    $sql = "SELECT * FROM product WHERE id = '$id'";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    return $arr;
}
// function prdCate() {
//     include_once('Config/connect.php');
//     $catid = $_GET['catid'];
//     $query = mysqli_query($connect, "SELECT * FROM product WHERE catid = '$catid'");
//     include_once('Config/close_connect.php');
//     return $query;
// }

switch($redirect) {
    case 'product': $arr = index(); break;
    // case 'prdCate': prdCate(); break;
}
?>