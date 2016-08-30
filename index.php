<?php

require 'router.php';
require 'routes.php';
echo "hello";

$router = new Router; 

$uri = trim($_SERVER['REQUEST_URI'], '/');


require $router->direct($uri);






