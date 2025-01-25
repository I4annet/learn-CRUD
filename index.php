<?php
require_once 'controller/customerController.php';
require_once 'controller/adminController.php';

$customerController = new CustomerController();
$adminController = new AdminController();

$requestUri = $_SERVER['REQUEST_URI'];
$basePath = '/index.php';

$uri = str_replace($basePath, '', $requestUri);

$uri = strtok($uri, '?');

$uriSegment = explode('/', $uri);

$baseRoute = $uriSegment[0] ?? '';

switch ($baseRoute) {
    case 'admin':
        switch ($uri) {
            case 'admin':
                $adminController->dashboard();
                break;
            case 'admin/login':
                $adminController->login();
                break;
            case 'admin/logout':
                $adminController->logout();
                break;
            case 'admin/kelola':
                $adminController->kelola();
                break;
            default:
                header('Location: ../admin');
                break;
        }
        break;
        case 'customer':
            switch ($uri) {
                case 'customer':
                    $customerController->index();
                    break;
                case 'customer/create':
                    $customerController->create();
                    break;
                case 'customer/store':
                    $customerController->store();
                    break;
                case 'customer/edit':
                    $customerController->edit();
                    break;
                case 'customer/update':
                    $customerController->update();
                    break;
                case 'customer/delete':
                    $customerController->delete();
                    break;
                default:
                    header('Location: ../customer');
                    break;
            }
            break;
}

?>