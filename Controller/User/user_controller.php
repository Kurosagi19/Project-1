<?php
switch($action) {
    case '':
        require_once('Model/User/user_model.php');
        require_once('Views/User/main.php');
        ; break;
        case 'create':
            require_once('Views/User/add_user.php');
            ; break;
        case 'store':
            require_once('Model/User/user_model.php');
            header('location: ?controller='.$controller.'');
            ; break;
        case 'edit':
            require_once('Views/User/edit_user.php');
        case 'update':
            require_once('Model/User/user_model.php');
            header('location: ?controller='.$controller.'');
            ; break;
}
?>