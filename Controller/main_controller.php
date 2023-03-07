<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
switch($controller) {
    case 'user' : require_once('User/user_controller.php'); break;
    case 'product' : require_once('Product/product_controller.php'); break;
}
?>