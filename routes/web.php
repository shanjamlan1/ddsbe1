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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/users','UserController@index'); //get all users in site2
$router->post('/users', 'UserController@addUser');  // creates a new user record in site2
$router->get('/users/{id}', 'UserController@showUser'); // get user by a specific id in site2
$router->put('/users/{id}', 'UserController@updateUser'); // updates a user in site2
$router->delete('/users/{id}', 'UserController@deleteUser'); // deletes a user in site2
