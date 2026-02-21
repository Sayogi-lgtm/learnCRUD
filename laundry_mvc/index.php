<?php
require_once 'config/Database.php';
require_once 'controllers/laundryController.php';

$database = new Database();
$db = $database->getConnection();

$controller = new laundryController($db);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'create':
        $controller->create();
        break;
    case 'store':
        $controller->store();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit';
        $controller->edit();
        break;
    case 'update';
        $controller->update();
        break;
    default:
        $controller->index();
        break;
}

