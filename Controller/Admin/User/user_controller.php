<?php
switch($action) {
    case '':
        require_once('Model/Admin/User/user_model.php');
        require_once('Views/Admin/User/main.php');
        ; break;
    case 'create':
        require_once('Views/Admin/User/add_user.php');
        ; break;
    case 'store':
        require_once('Model/Admin/User/user_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
    case 'edit':
        require_once('Model/Admin/User/user_model.php');
        require_once('Views/Admin/User/edit_user.php');
        ; break;
    case 'update':
        require_once('Model/Admin/User/user_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
        case 'destroy' : 
            require_once('Model/Admin/User/user_model.php');
            header('location: index.php?controller='.$controller.'&redirect='.$redirect.'');
            ; break;
}
?>