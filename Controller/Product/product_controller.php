<?php
switch($action) {
    case '':
        require_once('Model/Product/product_model.php'); break;
        require_once('Views/Product/main.php'); break;
    case 'create':
        require_once('Views/Product/add_product.php');
        ; break;
}
?>