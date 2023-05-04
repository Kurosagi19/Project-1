<?php
switch($action) {
    case '' : 
        require_once('Model/Admin/Order/order_model.php');
        require_once('Views/Admin/Order/main.php');
        ; break;
    case 'destroy' : 
        require_once('Model/Admin/Order/order_model.php');
        header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
}
?>