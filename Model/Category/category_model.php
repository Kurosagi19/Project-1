<?php
function index() {
    include_once('Config/connect.php');
    $sql = "SELECT * FROM category";
    $record = mysqli_query($connect,$sql);
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
    $catid = $_GET['catid'];
    include_once('Config/connect.php');
    $sql = "SELECT * FROM category WHERE catid = '$catid'";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function update() {
    include_once('Config/connect.php');
    $catid = $_POST['catid'];
    $catname = $_POST['catname'];
    $sql = "UPDATE category SET catname = '$catname' WHERE catid = '$catid'";
    mysqli_query($connect, $sql);
    include_once('Config/close_conenct.php');
}
function delete() {
    $catid = $_GET['catid'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM category WHERE catid = '$catid'");
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