<?php
$id = $_GET['id'];
include_once('Config/connect.php');
mysqli_query($connect, "DELETE FROM user WHERE id = ".$id."");
header('location: ?controller='.$controller.'');
?>