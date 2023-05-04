<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM orders ORDER BY orderid DESC");
    include_once('Config/close_connect.php');
    return $query;
}

function destroy() {
    $orderid = $_GET['orderid']; 
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM orders WHERE orderid = '$orderid'");
    include_once('Config/close_connect.php');
}

switch($action) {
    case '': $record = index(); break;
    case 'destroy': destroy(); break;
}
?>