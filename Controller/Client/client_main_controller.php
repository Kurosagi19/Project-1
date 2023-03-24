<?php
$redirect = $_GET['redirect'] ?? '';
require_once('Model/Client/index_model.php');
require_once('Views/Client/index.php');

if($redirect == '') {
    
} else {
    switch($redirect) {
        case 'product':
            require_once('Model/Client/client_model.php');
            require_once('Views/Client/product.php');
        }
}
?>