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


// -- Train REST --
$router->get('/train', 'TrainController@index');
$router->get('/train/{id}', 'TrainController@show');
$router->post('/train', 'TrainController@store');
$router->put('/train/{id}', 'TrainController@update');
$router->delete('/train/{id}', 'TrainController@destroy');    
// -- End Train REST --

// -- Class REST --
$router->get('/class', 'ClassController@index');
$router->get('/class/{id}', 'ClassController@show');
$router->post('/class', 'ClassController@store');
$router->put('/class/{id}', 'ClassController@update');
$router->delete('/class/{id}', 'ClassController@destroy');    
// -- End Class REST --

// -- Station REST --
$router->get('/station', 'StationController@index');
$router->get('/station/{id}', 'StationController@show');
$router->post('/station', 'StationController@store');
$router->put('/station/{id}', 'StationController@update');
$router->delete('/station/{id}', 'StationController@destroy');    
// -- End Station REST --

// // -- Schedule REST --
$router->get('/schedule', 'DTScheduleController@index');
$router->get('/schedule/{id}', 'DTScheduleController@show');
$router->post('/schedule', 'DTScheduleController@store');
$router->put('/schedule/{id}', 'DTScheduleController@update');
$router->delete('/schedule/{id}', 'DTScheduleController@destroy');    
// // -- End Schedule REST --

$router->get('/dt_transaksi', 'DTTransaksiController@index');