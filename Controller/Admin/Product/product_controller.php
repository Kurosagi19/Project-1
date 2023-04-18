<?php
switch($action) {
    case '' : 
        require_once('Model/Admin/Product/product_model.php');
        require_once('Views/Admin/Product/main.php');
        ; break;
    case 'create' : 
        // require_once('Model/Product/product_model.php'); Gọi model để lấy thông tin danh mục, nhà sản xuất...
        require_once('Views/Admin/Product/add_product.php');
        ; break;
    case 'store' : 
        require_once('Model/Admin/Product/product_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
    case 'edit' : 
        require_once('Model/Admin/Product/product_model.php');
        require_once('Views/Admin/Product/edit_product.php');
        ; break;
    case 'update' : 
        require_once('Model/Admin/Product/product_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
    case 'destroy' : 
        require_once('Model/Admin/Product/product_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
}
?>