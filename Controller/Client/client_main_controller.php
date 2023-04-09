<?php
$redirect = $_GET['redirect'] ?? '';
require_once('Model/Client/index_model.php');
require_once('Views/Client/index.php');

if($redirect == '') {
    
} else {
    switch($redirect) {
        case 'product':
            require_once('Model/Client/Product/product_model.php');
            require_once('');
            require_once('Views/Client/product.php');
            ; break;
        case 'cart':
            require_once('Model/Cart/cart_model.php');
            ; break;
        case 'category':
            require_once('Model/Client/Category/category_model.php');
            require_once('Views/Client/category.php');
            ; break;
        }
}
?>