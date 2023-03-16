<?php
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])) {
    require_once('Controller/main_controller.php');
} else {
    include_once('login.php');
}
?>