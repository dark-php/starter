<?php

require 'vendor/autoload.php';

use Darkmantle\Starter\Components\Alert;
use Darktec\Router\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

// Error handling
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();


// Blade register
$blade = new \Lexdubyna\Blade\Blade('views', 'cache');
$blade->compiler()->components([
    'alert' => Alert::class
]);

// Init router and set routes
Router::init();
require 'src/routes.php';


Router::match($_SERVER['REQUEST_METHOD'], strtok($_SERVER["REQUEST_URI"], '?'));