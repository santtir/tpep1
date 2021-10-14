<?php
require_once('controllers/teamController.php');
require_once('controllers/authController.php');

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('administrator', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/administrator');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'login':
        $authController = new authController();
        $authController->showLogin();
        break;
    case 'verify': 
        $authController = new authController();
        $authController->login();
        break;
    case 'logout': 
        $authController = new authController();
        $authController->logout();
        break;
    case 'home':
        $controller = new teamController();
        $controller->showCountries();
        break;
    case 'detallar':
        $controller = new teamController();
        $controller->showTeamsByContries();
        break;
    case 'teams':
        $controller = new teamController();
        $controller->showTeams();
        break;
    case 'administrator';
        $controller = new teamController();
        $controller->showAdmin();
        break;
    case 'insertCountrie';
        $controller = new teamController();
        $controller->addCountries();
        break;
    case 'deleteCountrie';
        $controller = new teamController();
        $controller->deleteCountries($params[1]);
        break;
    case 'editCountrie';
        $controller = new teamController();
        $controller->UpdateCountrie();
        break;
    case 'insertTeam';
        $controller = new teamController();
        $controller->addTeams();
        break;
    case 'deleteTeam';
        $controller = new teamController();
        $controller->deleteTeams($params[1]);
        break;
    case 'editTeam';
        $controller = new teamController();
        $controller->confirmTeam();
        break;
    default:
        echo '404 - Página no encontrada';
        break;
}
