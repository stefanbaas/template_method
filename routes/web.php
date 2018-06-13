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

use App\Classes\PizzaSalami;
use App\Classes\PizzaVeggie;

Route::get('/', function () {

    $pizzaSalami = new PizzaSalami();
    var_dump($pizzaSalami->makePizza());

    $pizzaVeggie = new PizzaVeggie();
    var_dump($pizzaVeggie->makePizza());

    return view('welcome');
});
