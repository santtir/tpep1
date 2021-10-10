<?php

require_once('controllers/teamController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('administrator', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/administrator');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'listar';
}


$params = explode('/', $action);

$controller=new teamController();

switch ($params[0]) {
    case 'listar':
        $controller->showCountries();
        break;
    case 'detallar':
        $controller->showTeamsByContries($params[1]);
        break;
    case 'teams':
        $controller->showTeams();
        break;
    case 'administrator';
        $controller->showAdmin();
        break;
    case 'insertCountrie';
        $controller->addCountries();
        break;
    case 'deleteCountrie';
        $controller->deleteCountries($params[1]);
        break;
    case 'editCountrie';
        $controller->editByCountries($params[1]);
        break; 
    case 'insertTeam';
        $controller->addTeams();
        break;
    case 'deleteTeam';
        $controller->deleteTeams($params[1]);
        break;
    case 'editTeam';
        $controller->editByTeams($params[1]);
        break; 
    case 'confirmTeam';
        $controller->confirmTeam($params[1]);
        break;    
        default:
        echo '404 - Página no encontrada';
        break;
}
