<?php
$action1 = '';
if(isset($_GET['action'])) {
    $action = $_GET['action'];
}
$action = $_GET['action'];
switch($action) {
    case 'login': include_once('Views/login-logout/login.php');
}
?>