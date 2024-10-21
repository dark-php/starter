<?php

use Darkmantle\Starter\Middleware\AuthGuard;
use Darktec\Router\Router;

Router::map('GET', '/', 'Darkmantle\Starter\Controllers\HomeController@index', AuthGuard::class);
Router::map('GET', '/login', 'Darkmantle\Starter\Controllers\AuthController@loginGet');