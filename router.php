<?php

require_once('controllers/teamController.php');

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

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

    case 'info_team':
        $controller->showCups([$params[1]]);
        break;

    default:
        echo'se rompio';
        break;
}
