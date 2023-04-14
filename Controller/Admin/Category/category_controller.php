<?php
switch($action) {
    case '':
        require_once('Model/Admin/Category/category_model.php');
        require_once('Views/Admin/Category/main.php');
        ; break;
    case 'create':
        require_once('Views/Admin/Category/add_category.php');
        ; break;
    case 'store':
        require_once('Model/Admin/Category/category_model.php');
        header('location: index.php?controller='.$controller.'$redirect='.$redirect.'');
        break;
    case 'edit':
        require_once('Model/Admin/Category/category_model.php');
        require_once('Views/Admin/Category/edit_category.php');
        ; break;
    case 'update':
        require_once('Model/Admin/Category/category_model.php');
        header('location: index.php?controller=category');
        break;
    case 'delete':
        require_once('Model/Admin/Category/category_model.php');
        header('location: index.php?controller=category');
        break;
}
?>