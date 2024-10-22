<?php

use DarkTec\Router\Route;
use DarkTec\Starter\Middleware\AdminGuard;
use DarkTec\Starter\Middleware\AuthGuard;

Route::get('/', 'DarkTec\Starter\Controllers\HomeController@index');

// Auth
Route::get('/login', 'DarkTec\Starter\Controllers\AuthController@loginGet');
Route::post('/login', 'DarkTec\Starter\Controllers\AuthController@loginPost');

// Authenticated
Route::middleware([AuthGuard::class])->group([
    Route::get('/logout', 'DarkTec\Starter\Controllers\AuthController@logout'),
    Route::get('/dashboard', 'DarkTec\Starter\Controllers\HomeController@index'),
    Route::get('/admin', 'DarkTec\Starter\Controllers\AdminController@index', AdminGuard::class)
]);