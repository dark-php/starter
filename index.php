<?php
require 'vendor/autoload.php';

use Darktec\Application;
use DarkTec\Helpers\Blade;
use DarkTec\Starter\Components\Alert;
use DarkTec\Starter\Components\Forms\LoginForm;
use DarkTec\Starter\Components\Layout;

// Create application instance
$application = new Application();

// Add routes
require 'src/routes.php';

// Register Blade components
Blade::addComponents([
    Layout::class,
    Alert::class,
    LoginForm::class
]);

// Start the app
$application->start();