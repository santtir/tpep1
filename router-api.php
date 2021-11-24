<?php

require_once 'libs/Router.php';
require_once 'controllers/apiController.php';

//crea el router

$router=new Router();


//define tabla de ruteo

$router->addRoute('comments', 'GET', 'ApiController', 'showComments');
$router->addRoute('comments', 'POST', 'ApiController', 'postComment');
$router->addRoute('comments/:ID', 'DELETE', 'ApiController', 'deleteComment');



//rutea


$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
