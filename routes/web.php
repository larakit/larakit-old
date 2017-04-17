<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$routes = rglob('*.php', 0, __DIR__ . '/web');
foreach($routes as $route) {
    include_once $route;
}

Route::get('/', function () {
    return view('welcome');
});
