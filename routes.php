<?php
    require 'controllers/AuthController.php';
    require 'controllers/UserController.php';
    require 'controllers/DashboardController.php';

    $authController = new AuthController();
    $userController = new  UserController();
    $dashboardController = new DashboardController();

    // coleta a ação da URL, se não ouver ação definida, usa 'login'como padrão
    $action = $_GET['action'] ?? 'login'; //usa operadpor de coalecencia nula (??) para definir 'login' se 'action' não estiver presente

    switch ($action){
        case 'login':
            $authController->login();
            break;
        case 'logout':
            $authController->logout();
            break;
        case 'register':
            $userController->register();
            break;
        case 'dashboard':
            $dashboardController->index();
            break;   
        default:
        $authController->login();
        break;
    }
?>