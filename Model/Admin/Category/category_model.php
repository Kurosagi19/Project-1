<?php
function index() {
    include_once('Config/connect.php');
    $sql = "SELECT * FROM category ORDER BY id ASC";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function store() {
    include_once('Config/connect.php');
    $catname = $_POST['catname'];
    $sql = "INSERT INTO category (catname) VALUES ('$catname')";
    mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $sql = "SELECT * FROM category WHERE id = '$id'";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function update() {
    include_once('Config/connect.php');
    $id = $_POST['id'];
    $catname = $_POST['catname'];
    $sql = "UPDATE category SET catname = '$catname' WHERE id = '$id'";
    mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
}
function delete() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM category WHERE id = '$id'");
    include_once('Config/close_connect.php');
}

switch($action) {
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update': update(); break;
    case 'delete': delete(); break;
}
?>