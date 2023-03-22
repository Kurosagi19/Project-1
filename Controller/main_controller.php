<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
// switch($controller) {
//     case 'admin':

//     case 'login': require_once('Login/login_controller.php');
//     case 'user' : require_once('User/user_controller.php'); break;
//     case 'product' : require_once('Product/product_controller.php'); break;
//     case '': if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
//         require_once('Views/index.php');
//     } else {
//         header('location:?controller=login&action=login');
//     }
//     ; break;
//     case 'category': require_once('Category/category_controller.php'); break;
// }
if(!isset($_GET['controller'])) {
    require_once('Controller/Client/client_main_controller.php');
} else {
    switch($controller) {
        case 'admin':
            require_once('Controller/Admin/admin_main_controller.php');
            break;
    }
}
?>