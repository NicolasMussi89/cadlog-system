<?php
    require 'controllers/AuthController.php';
    require 'controllers/UserController.php';
    require 'controllers/DashboardController.php';

    $authController = new AuthController();
    $userController = new  UserController();
    $dashboardController = new DashboardController();

?>