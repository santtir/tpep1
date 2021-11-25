<?php

require_once 'libs/Router.php';
require_once 'controllers/apiCommentsController.php';

//crea el router

$router = new Router();


//define tabla de ruteo

$router->addRoute('comments/teams/:ID_TEAM', 'GET', 'ApiCommentsController', 'showComments');
$router->addRoute('comments', 'POST', 'ApiCommentsController', 'postComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiCommentsController', 'deleteComment');
$router->addRoute('comments/orderAsc/teams/:ID_TEAM', 'GET', 'ApiCommentsController', 'showCommentsOrderAsc');

//rutea


$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
