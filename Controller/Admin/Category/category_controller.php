<?php
switch($action) {
    case '':
        require_once('Model/Category/category_model.php');
        require_once('Views/Category/main.php'); break;
    case 'create':
        require_once('Views/Category/add_category.php');
        ; break;
    case 'store':
        require_once('Model/Category/category_model.php');
        header('location: index.php?controller=category');
        break;
    case 'edit':
        require_once('Model/Category/category_model.php');
        require_once('Views/Category/edit_category.php'); break;
     case 'update':
        require_once('Model/Category/category_model.php');
        header('location: index.php?controller=category');
        break;
    case 'delete':
        require_once('Model/Category/category_model.php');
        header('location: index.php?controller=category');
        break;
}
?>