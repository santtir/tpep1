<?php

require_once 'libs/Router.php';
require_once 'controllers/apiController.php';

//crea el router

$router=new Router();


//define tabla de ruteo

$router->addRoute('teams', 'GET', 'apiController', 'showTeams');

//rutea

$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);