<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

$router->get('/', function () {
    return 'Hello World';
});

$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('/register', 'Api\AuthController@register');
    $router->post('/login', 'Api\AuthController@login');

    //profile
    $router->get('profile', 'Api\UserController@profile');
});