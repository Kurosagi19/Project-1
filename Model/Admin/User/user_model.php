<?php
function index() {
    include_once('Config/connect.php');
    $sql = "SELECT * FROM user";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}

function store() {
    include_once('Config/connect.php');
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    if($_POST['repassword'] === $_POST['password']) {
        $password = $_POST['password'];
    } else {
        $errorr = '<div class="alert alert-danger">Password and Re-Password does not match !</div>';
    }
    $sql = "INSERT INTO user (username, password, fullname) VALUES ('$username', '$password', '$fullname')";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}

function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $sql = "SELECT * FROM user WHERE id = ".$id."";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}

function update() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    if($_POST['repassword'] === $_POST['password']) {
        $password = $_POST['password'];
    } else {
        $errorr = '<div class="alert alert-danger">Password and Re-Password does not match !</div>';
    }
    $sql = "UPDATE user SET username = $username, password = $password, fullname = $fullname WHERE id = $id";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function destroy() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM user WHERE id = '$id'");
    include_once('Config/close_connect.php');
}

switch($action) {
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update': update(); break;
    case 'destroy': destroy(); break;
}
?>