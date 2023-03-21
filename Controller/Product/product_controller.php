<?php
switch($action) {
    case '':
        require_once('Model/Product/product_model.php');
        require_once('Views/Product/main.php'); break;
    case 'create':
        require_once('Views/Product/add_product.php');
        ; break;
    case 'store':
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        break;
    case 'edit':
        require_once('Model/Product/product_model.php');
        require_once('Views/Product/edit_product.php'); break;
     case 'update':
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        break;
    case 'delete':
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        break;
}
?>