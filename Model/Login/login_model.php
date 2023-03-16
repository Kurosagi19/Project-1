<?php
function checklogin() {
    include_once('Config/connect.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    if($count == 0) {
        // Login Fail
        return 0;
    } else {
        // Login Success
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        return 1;
    }
    include_once('Config/close_connect.php');
}

switch($action) {
    case 'checklogin': $check = checklogin(); break;
}
?>